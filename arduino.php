<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Salami-Reifung Simulation</title>
    <script src="https://cdn.jsdelivr.net/npm/react@18.2.0/umd/react.production.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/react-dom@18.2.0/umd/react-dom.production.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #1a1a1a;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            touch-action: manipulation;
        }

        #root {
            width: 800px;
            height: 480px;
            background: linear-gradient(145deg, #2d2d2d, #212121);
            color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            position: relative;
            display: flex;
            flex-direction: row;
            padding: 12px;
            transition: background 0.3s, color 0.3s;
        }

        #root.light {
            background: linear-gradient(145deg, #f5f5f5, #e0e0e0);
            color: #333333;
        }

        .button {
            padding: 14px;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            user-select: none;
            font-size: 16px;
            font-weight: 600;
            transition: transform 0.2s, background-color 0.2s, box-shadow 0.2s;
            position: relative;
        }

        .button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .button:active {
            transform: scale(0.92);
        }

        .button:hover::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: #333;
            color: #fff;
            padding: 6px 10px;
            border-radius: 4px;
            font-size: 12px;
            white-space: nowrap;
            z-index: 10;
            transition: opacity 0.2s;
            opacity: 0.9;
        }

        .temp-button {
            background: linear-gradient(to right, #ff4d4d, #ff1a1a);
        }

        .feuchte-button {
            background: linear-gradient(to right, #4d79ff, #1a53ff);
        }

        .ventilator-button {
            background: linear-gradient(to right, #4dff4d, #1aff1a);
        }

        .nav-button {
            background: linear-gradient(to right, #666666, #4d4d4d);
        }

        .ein-aus-button {
            position: absolute;
            top: 12px;
            right: 12px;
            width: 60px;
            height: 36px;
            border-radius: 18px;
            background: #666666;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .ein-aus-button.on {
            background: #00cc00;
        }

        .theme-toggle {
            position: absolute;
            top: 12px;
            left: 12px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #666666;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .status-bar {
            background-color: #000000;
            color: #ffff00;
            padding: 8px;
            font-size: 14px;
            border-radius: 8px;
            margin-top: 8px;
            width: 100%;
        }

        .light .status-bar {
            background-color: #333333;
            color: #ffff00;
        }

        .frame {
            border: 2px solid #4d79ff;
            border-radius: 12px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.05);
            margin-bottom: 10px;
        }

        .ist-value {
            font-weight: 700;
            font-size: 18px;
            margin: 4px 0;
            transition: color 0.3s;
        }

        .ist-value.updated {
            animation: blink 0.5s ease-in-out;
        }

        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }

        .temp-ist {
            color: #ff4d4d;
        }

        .feuchte-ist {
            color: #4d79ff;
        }

        .ventilator-ist {
            color: #4dff4d;
        }

        .heizung-status {
            color: #ff4d4d;
        }

        .befeuchter-status {
            color: #4d79ff;
        }

        .entfeuchter-status {
            color: #00b7eb;
        }

        .kühlung-status {
            color: #ffff00;
        }

        .status-ein-aus {
            color: #ffffff;
        }

        .status-off {
            color: #cccccc;
        }

        .duration-input {
            background-color: #333333;
            color: #ffffff;
            border: 1px solid #666666;
            border-radius: 8px;
            font-size: 14px;
            padding: 6px;
            width: 100px;
            text-align: center;
        }

        .light .duration-input {
            background-color: #e0e0e0;
            color: #333333;
            border: 1px solid #999999;
        }

        .progress-ring {
            position: relative;
            width: 70px;
            height: 70px;
            margin: 8px auto;
        }

        .progress-ring__circle {
            transition: stroke-dashoffset 0.35s;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
        }

        .modal-content {
            background: #2d2d2d;
            padding: 16px;
            border-radius: 12px;
            text-align: center;
            max-width: 600px;
            width: 90%;
        }

        .light .modal-content {
            background: #f5f5f5;
            color: #333333;
        }

        .preset-button {
            background: linear-gradient(to right, #4d79ff, #1a53ff);
            margin: 6px 0;
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
        }

        .preset-description {
            font-size: 12px;
            color: #cccccc;
            margin-top: 4px;
        }

        .light .preset-description {
            color: #666666;
        }

        .chart-container {
            margin: 8px 0;
            height: 80px;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            background: rgba(255, 255, 255, 0.05);
            padding: 6px;
            border-radius: 8px;
        }

        .light .chart-container {
            background: rgba(0, 0, 0, 0.05);
        }

        .chart-bar {
            width: 18%;
            transition: height 0.3s;
            border-radius: 4px;
            position: relative;
        }

        .chart-bar.temp {
            background: linear-gradient(to top, #ff4d4d, #ff1a1a);
        }

        .chart-bar.humidity {
            background: linear-gradient(to top, #4d79ff, #1a53ff);
        }

        .chart-bar:hover::after {
            content: attr(data-tooltip);
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            background: #333;
            color: #fff;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            white-space: nowrap;
            z-index: 10;
        }

        .timeline-container {
            margin: 8px 0;
            height: 120px;
            overflow-x: auto;
            background: rgba(255, 255, 255, 0.05);
            padding: 6px;
            border-radius: 8px;
            width: 100%;
        }

        .light .timeline-container {
            background: rgba(0, 0, 0, 0.05);
        }

        .timeline-svg {
            height: 100%;
            min-width: 100%;
        }

        .zoom-controls {
            display: flex;
            gap: 6px;
            margin-top: 6px;
            justify-content: center;
        }

        .error-message {
            background: #ff4d4d;
            color: #ffffff;
            padding: 8px;
            border-radius: 8px;
            margin-bottom: 8px;
            font-size: 14px;
            text-align: center;
            animation: fadeIn 0.3s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .left-column {
            width: 300px;
            display: flex;
            flex-direction: column;
            margin-right: 12px;
            overflow-y: auto;
        }

        .right-column {
            width: calc(100% - 312px);
            display: flex;
            flex-direction: column;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <div id="root"></div>
    <script type="text/babel">
        const { useState, useEffect } = React;

        const ProgressRing = ({ radius, stroke, progress }) => {
            console.log('Rendering ProgressRing with progress:', progress);
            const normalizedRadius = radius - stroke * 2;
            const circumference = normalizedRadius * 2 * Math.PI;
            const strokeDashoffset = circumference - (progress / 100) * circumference;

            return (
                <div className="progress-ring">
                    <svg height={radius * 2} width={radius * 2}>
                        <circle
                            stroke="#333333"
                            fill="transparent"
                            strokeWidth={stroke}
                            r={normalizedRadius}
                            cx={radius}
                            cy={radius}
                        />
                        <circle
                            stroke="#00cc00"
                            fill="transparent"
                            strokeWidth={stroke}
                            strokeDasharray={`${circumference} ${circumference}`}
                            style={{ strokeDashoffset }}
                            r={normalizedRadius}
                            cx={radius}
                            cy={radius}
                            className="progress-ring__circle"
                        />
                    </svg>
                    <div style={{ position: 'absolute', top: '50%', left: '50%', transform: 'translate(-50%, -50%)', fontSize: '14px' }}>
                        {Math.round(progress)}%
                    </div>
                </div>
            );
        };

        const TimelineChart = ({ data, zoomLevel }) => {
            console.log('Rendering TimelineChart with data:', data, 'zoomLevel:', zoomLevel);
            const pointSpacing = zoomLevel * 20;
            const width = Math.max(800, data.length * pointSpacing);
            const height = 100;
            const maxTemp = 40;
            const maxHumidity = 100;

            const tempPoints = data.map((entry, index) => {
                const x = index * pointSpacing;
                const y = height - (entry.temp / maxTemp) * height;
                return `${x},${y}`;
            }).join(' ');

            const humidityPoints = data.map((entry, index) => {
                const x = index * pointSpacing;
                const y = height - (entry.humidity / maxHumidity) * height;
                return `${x},${y}`;
            }).join(' ');

            return (
                <div className="timeline-container">
                    <svg className="timeline-svg" width={width} height={height}>
                        <polyline
                            points={tempPoints}
                            fill="none"
                            stroke="#ff4d4d"
                            strokeWidth="2"
                        />
                        <polyline
                            points={humidityPoints}
                            fill="none"
                            stroke="#4d79ff"
                            strokeWidth="2"
                        />
                        {data.map((entry, index) => {
                            const x = index * pointSpacing;
                            const tempY = height - (entry.temp / maxTemp) * height;
                            const humidityY = height - (entry.humidity / maxHumidity) * height;
                            return (
                                <g key={index}>
                                    <circle
                                        cx={x}
                                        cy={tempY}
                                        r="3"
                                        fill="#ff4d4d"
                                        data-tooltip={`Zeit: ${index * zoomLevel * 5}m, Temp: ${entry.temp.toFixed(1)} °C`}
                                    />
                                    <circle
                                        cx={x}
                                        cy={humidityY}
                                        r="3"
                                        fill="#4d79ff"
                                        data-tooltip={`Zeit: ${index * zoomLevel * 5}m, Feuchte: ${entry.humidity.toFixed(1)} %`}
                                    />
                                </g>
                            );
                        })}
                    </svg>
                </div>
            );
        };

        const App = () => {
            const [steps, setSteps] = useState(() => {
                const saved = localStorage.getItem('steps');
                return saved ? JSON.parse(saved) : [{
                    id: Date.now(),
                    settings: {
                        minHumidity: 75.0,
                        maxHumidity: 85.0,
                        minTemp: 18.0,
                        maxTemp: 24.0,
                        fanSpeed: 60
                    },
                    duration: 3600
                }];
            });

            const [currentStepIndex, setCurrentStepIndex] = useState(0);
            const [remainingTime, setRemainingTime] = useState(steps[0].duration);
            const [humidity, setHumidity] = useState(80.0);
            const [temp, setTemp] = useState(20.0);
            const [isControlOn, setIsControlOn] = useState(false);
            const [error, setError] = useState('');
            const [programEnded, setProgramEnded] = useState(false);
            const [showPresets, setShowPresets] = useState(false);
            const [showEndModal, setShowEndModal] = useState(false);
            const [showAddProgram, setShowAddProgram] = useState(false);
            const [history, setHistory] = useState([]);
            const [timelineData, setTimelineData] = useState([]);
            const [theme, setTheme] = useState('dark');
            const [programName, setProgramName] = useState('Benutzerdefiniert');
            const [newProgramName, setNewProgramName] = useState('');
            const [tempUpdated, setTempUpdated] = useState(false);
            const [humidityUpdated, setHumidityUpdated] = useState(false);
            const [zoomLevel, setZoomLevel] = useState(1);
            const [timeCounter, setTimeCounter] = useState(0);
            const [saveMode, setSaveMode] = useState('new'); // 'new' oder 'update'
            const [selectedProgram, setSelectedProgram] = useState('');
            const [useCurrentSteps, setUseCurrentSteps] = useState(true); // Ob aktuelle oder originale steps gespeichert werden
            const [savedPrograms, setSavedPrograms] = useState(() => {
                const saved = localStorage.getItem('programs');
                return saved ? JSON.parse(saved) : [
                    {
                        name: 'Standard Salami',
                        steps: [{
                            id: Date.now(),
                            settings: { minHumidity: 75, maxHumidity: 85, minTemp: 18, maxTemp: 24, fanSpeed: 60 },
                            duration: 3600
                        }],
                        description: 'Ausgewogenes Profil für klassische Salami-Reifung.'
                    },
                    {
                        name: 'Schnellreifung',
                        steps: [{
                            id: Date.now() + 1,
                            settings: { minHumidity: 70, maxHumidity: 80, minTemp: 20, maxTemp: 26, fanSpeed: 80 },
                            duration: 1800
                        }],
                        description: 'Schneller Prozess für weichere Salami.'
                    },
                    {
                        name: 'Langsamreifung',
                        steps: [{
                            id: Date.now() + 2,
                            settings: { minHumidity: 80, maxHumidity: 90, minTemp: 16, maxTemp: 22, fanSpeed: 40 },
                            duration: 7200
                        }],
                        description: 'Langsamer Prozess für intensive Aromen.'
                    }
                ];
            });

            console.log('App initial state:', { steps, programName, timelineData, isControlOn, timeCounter });

            useEffect(() => {
                localStorage.setItem('steps', JSON.stringify(steps));
                localStorage.setItem('programs', JSON.stringify(savedPrograms));
                const currentSettings = steps[currentStepIndex].settings;
                if (currentSettings.fanSpeed < 20) {
                    setError('Ventilatorgeschwindigkeit muss mindestens 20% sein!');
                    updateStepSettings({ ...currentSettings, fanSpeed: 20 });
                } else if (currentSettings.minTemp >= currentSettings.maxTemp) {
                    setError('Min. Temperatur muss kleiner als Max. Temperatur sein!');
                } else if (currentSettings.minHumidity >= currentSettings.maxHumidity) {
                    setError('Min. Feuchtigkeit muss kleiner als Max. Feuchtigkeit sein!');
                } else {
                    setError('');
                }
            }, [steps, currentStepIndex, savedPrograms]);

            useEffect(() => {
                if (!isControlOn || programEnded) return;

                console.log('Running main interval, isControlOn:', isControlOn, 'timeCounter:', timeCounter);
                const interval = setInterval(() => {
                    setRemainingTime(prev => {
                        if (prev <= 1) {
                            if (currentStepIndex < steps.length - 1) {
                                setCurrentStepIndex(prev => prev + 1);
                                return steps[currentStepIndex + 1].duration;
                            } else {
                                setIsControlOn(false);
                                setProgramEnded(true);
                                setShowEndModal(true);
                                return 0;
                            }
                        }
                        return prev - 1;
                    });

                    setTimeCounter(prev => {
                        const newCounter = prev + 1;
                        console.log('TimeCounter updated:', newCounter);
                        return newCounter;
                    });

                    const currentSettings = steps[currentStepIndex].settings;
                    setTemp(prev => {
                        let targetTemp = prev;
                        if (prev < currentSettings.minTemp) {
                            targetTemp = Math.min(prev + 0.1, currentSettings.minTemp);
                        } else if (prev > currentSettings.maxTemp) {
                            targetTemp = Math.max(prev - 0.1, currentSettings.maxTemp);
                        }
                        setTempUpdated(true);
                        setTimeout(() => setTempUpdated(false), 500);
                        console.log('Updated temp:', targetTemp, 'target:', currentSettings.minTemp, currentSettings.maxTemp);
                        return targetTemp;
                    });

                    setHumidity(prev => {
                        let targetHumidity = prev;
                        if (prev < currentSettings.minHumidity) {
                            targetHumidity = Math.min(prev + 0.1, currentSettings.minHumidity);
                        } else if (prev > currentSettings.maxHumidity) {
                            targetHumidity = Math.max(prev - 0.1, currentSettings.maxHumidity);
                        }
                        setHumidityUpdated(true);
                        setTimeout(() => setHumidityUpdated(false), 500);
                        console.log('Updated humidity:', targetHumidity, 'target:', currentSettings.minHumidity, currentSettings.maxHumidity);
                        return targetHumidity;
                    });

                    setHistory(prev => [...prev.slice(-5), { temp, humidity }]);

                    if (timeCounter % 10 === 0) { // 10 Sekunden für Test, später 300 für 5 Minuten
                        setTimelineData(prev => {
                            const newData = [...prev, { temp, humidity }];
                            console.log('Added to timelineData:', newData);
                            return newData;
                        });
                    }
                }, 1000);

                return () => {
                    console.log('Cleaning up main interval');
                    clearInterval(interval);
                };
            }, [isControlOn, currentStepIndex, steps, programEnded, timeCounter, temp, humidity]);

            const updateStepSettings = (newSettings) => {
                setSteps(prev => {
                    const newSteps = [...prev];
                    newSteps[currentStepIndex] = {
                        ...newSteps[currentStepIndex],
                        settings: newSettings
                    };
                    return newSteps;
                });
                if (!isControlOn) {
                    setProgramName('Benutzerdefiniert');
                }
            };

            const handleButtonClick = (action) => {
                const currentSettings = steps[currentStepIndex].settings;
                const newSettings = { ...currentSettings };
                switch (action) {
                    case 'minTempPlus': newSettings.minTemp = Math.min(newSettings.minTemp + 0.5, newSettings.maxTemp - 0.5); break;
                    case 'minTempMinus': newSettings.minTemp = Math.max(newSettings.minTemp - 0.5, 0); break;
                    case 'maxTempPlus': newSettings.maxTemp = Math.min(newSettings.maxTemp + 0.5, 40); break;
                    case 'maxTempMinus': newSettings.maxTemp = Math.max(newSettings.maxTemp - 0.5, newSettings.minTemp + 0.5); break;
                    case 'minHumidityPlus': newSettings.minHumidity = Math.min(newSettings.minHumidity + 1, newSettings.maxHumidity - 1); break;
                    case 'minHumidityMinus': newSettings.minHumidity = Math.max(newSettings.minHumidity - 1, 0); break;
                    case 'maxHumidityPlus': newSettings.maxHumidity = Math.min(newSettings.maxHumidity + 1, 100); break;
                    case 'maxHumidityMinus': newSettings.maxHumidity = Math.max(newSettings.maxHumidity - 1, newSettings.minHumidity + 1); break;
                    case 'fanPlus': newSettings.fanSpeed = Math.min(newSettings.fanSpeed + 5, 100); break;
                    case 'fanMinus': newSettings.fanSpeed = Math.max(newSettings.fanSpeed - 5, 20); break;
                }
                updateStepSettings(newSettings);
            };

            const handleDurationChange = (e) => {
                if (isControlOn) return;
                const value = parseInt(e.target.value) || 0;
                if (value < 0) {
                    setError('Dauer kann nicht negativ sein!');
                    return;
                }
                setSteps(prev => {
                    const newSteps = [...prev];
                    newSteps[currentStepIndex] = {
                        ...newSteps[currentStepIndex],
                        duration: value
                    };
                    return newSteps;
                });
                setRemainingTime(value);
                setProgramName('Benutzerdefiniert');
            };

            const handlePrevStep = () => {
                if (isControlOn) return;
                setCurrentStepIndex(prev => Math.max(prev - 1, 0));
                setRemainingTime(steps[Math.max(currentStepIndex - 1, 0)].duration);
            };

            const handleNextStep = () => {
                if (isControlOn) return;
                setCurrentStepIndex(prev => Math.min(prev + 1, steps.length - 1));
                setRemainingTime(steps[Math.min(currentStepIndex + 1, steps.length - 1)].duration);
            };

            const handleAddStep = () => {
                if (isControlOn) return;
                const newStep = {
                    id: Date.now(),
                    settings: { ...steps[currentStepIndex].settings },
                    duration: 3600
                };
                setSteps(prev => [...prev, newStep]);
                setCurrentStepIndex(prev => prev + 1);
                setRemainingTime(3600);
                setProgramName('Benutzerdefiniert');
            };

            const handleDeleteStep = () => {
                if (isControlOn || steps.length <= 1) return;
                setSteps(prev => {
                    const newSteps = prev.filter((_, index) => index !== currentStepIndex);
                    return newSteps;
                });
                setCurrentStepIndex(prev => Math.min(prev, steps.length - 2));
                setRemainingTime(steps[Math.min(currentStepIndex, steps.length - 2)].duration);
                setProgramName('Benutzerdefiniert');
            };

            const toggleControl = () => {
                setIsControlOn(prev => {
                    console.log('Toggling isControlOn to:', !prev);
                    if (!prev) {
                        setRemainingTime(steps[currentStepIndex].duration);
                        setProgramEnded(false);
                        setShowEndModal(false);
                        setTimelineData([]);
                        setTimeCounter(0);
                    }
                    return !prev;
                });
            };

            const toggleTheme = () => {
                setTheme(prev => prev === 'dark' ? 'light' : 'dark');
            };

            const addProgram = () => {
                if (saveMode === 'new' && !newProgramName) {
                    setError('Bitte einen Programmnamen eingeben!');
                    return;
                }
                if (saveMode === 'update' && !selectedProgram) {
                    setError('Bitte ein Programm auswählen!');
                    return;
                }

                if (saveMode === 'new') {
                    const newProgram = {
                        name: newProgramName,
                        steps: steps,
                        description: 'Benutzerdefiniertes Programm.'
                    };
                    setSavedPrograms(prev => [...prev, newProgram]);
                    setProgramName(newProgramName);
                } else {
                    setSavedPrograms(prev => {
                        const updatedPrograms = prev.map(program => {
                            if (program.name === selectedProgram) {
                                return {
                                    ...program,
                                    steps: useCurrentSteps ? steps : program.steps
                                };
                            }
                            return program;
                        });
                        return updatedPrograms;
                    });
                    setProgramName(selectedProgram);
                }

                setNewProgramName('');
                setSelectedProgram('');
                setSaveMode('new');
                setUseCurrentSteps(true);
                setShowAddProgram(false);
                setError('');
            };

            const applyProgram = (program) => {
                setSteps(program.steps);
                setCurrentStepIndex(0);
                setRemainingTime(program.steps[0].duration);
                setProgramName(program.name);
                setShowPresets(false);
            };

            const zoomIn = () => {
                setZoomLevel(prev => Math.min(prev + 1, 6));
            };

            const zoomOut = () => {
                setZoomLevel(prev => Math.max(prev - 1, 1));
            };

            const getStatus = () => {
                if (programEnded) {
                    return <span className="status-off"><i className="fas fa-stop"></i> Programm beendet</span>;
                }
                if (!isControlOn) {
                    return (
                        <span className="status-off">
                            <i className="fas fa-thermometer-half"></i> Heizung: Aus | <i className="fas fa-tint"></i> Befeuchter: Aus | <i className="fas fa-tint-slash"></i> Entfeuchter: Aus | <i className="fas fa-snowflake"></i> Kühlung: Aus
                        </span>
                    );
                }

                return (
                    <span>
                        <i className="fas fa-thermometer-half"></i> <span className="heizung-status">Heizung</span>: <span className="status-ein-aus">{temp < steps[currentStepIndex].settings.minTemp ? 'Ein' : 'Aus'}</span> |{' '}
                        <i className="fas fa-tint"></i> <span className="befeuchter-status">Befeuchter</span>: <span className="status-ein-aus">{humidity < steps[currentStepIndex].settings.minHumidity ? 'Ein' : 'Aus'}</span> |{' '}
                        <i className="fas fa-tint-slash"></i> <span className="entfeuchter-status">Entfeuchter</span>: <span className="status-ein-aus">{humidity > steps[currentStepIndex].settings.maxHumidity ? 'Ein' : 'Aus'}</span> |{' '}
                        <i className="fas fa-snowflake"></i> <span className="kühlung-status">Kühlung</span>: <span className="status-ein-aus">{temp > steps[currentStepIndex].settings.maxTemp ? 'Ein' : 'Aus'}</span>
                    </span>
                );
            };

            const formatTime = (seconds) => {
                const h = Math.floor(seconds / 3600);
                const m = Math.floor((seconds % 3600) / 60);
                const s = seconds % 60;
                return `${h.toString().padStart(2, '0')}:${m.toString().padStart(2, '0')}:${s.toString().padStart(2, '0')}`;
            };

            const progress = steps[currentStepIndex].duration ? ((steps[currentStepIndex].duration - remainingTime) / steps[currentStepIndex].duration * 100) : 0;

            return (
                <div className={`flex h-full ${theme}`}>
                    <div className="left-column">
                        <div className="flex justify-between items-center mb-3">
                            <div className="theme-toggle" onClick={toggleTheme} data-tooltip="Thema wechseln" aria-label="Thema wechseln">
                                {theme === 'dark' ? <i className="fas fa-sun"></i> : <i className="fas fa-moon"></i>}
                            </div>
                            <h1 className="text-base font-bold text-center flex-1">Salami-Reifung: {programName} (Schritt {currentStepIndex + 1}/{steps.length})</h1>
                            <div className={`ein-aus-button ${isControlOn ? 'on' : ''}`} onClick={toggleControl} data-tooltip={isControlOn ? 'Steuerung ausschalten' : 'Steuerung einschalten'} aria-label={isControlOn ? 'Steuerung ausschalten' : 'Steuerung einschalten'}>
                                {isControlOn ? 'Ein' : 'Aus'}
                            </div>
                        </div>

                        {error && <div className="error-message">{error}</div>}

                        <div className="frame">
                            <h2 className="font-bold text-base mb-2">Aktuelle Werte</h2>
                            <p className={`ist-value temp-ist ${tempUpdated ? 'updated' : ''}`}>Temperatur: {temp.toFixed(1)} °C</p>
                            <p className={`ist-value feuchte-ist ${humidityUpdated ? 'updated' : ''}`}>Feuchtigkeit: {humidity.toFixed(1)} %</p>
                            <p className="ist-value ventilator-ist">Ventilator: {steps[currentStepIndex].settings.fanSpeed} %</p>
                            <div className="mt-3">
                                <p className="mb-2">Dauer (Sekunden):</p>
                                <input
                                    type="number"
                                    className="duration-input"
                                    value={steps[currentStepIndex].duration}
                                    onChange={handleDurationChange}
                                    disabled={isControlOn}
                                    min="0"
                                    aria-label="Dauer in Sekunden"
                                />
                                <p className="mt-2">Verbleibende Zeit: {formatTime(remainingTime)}</p>
                            </div>
                            <ProgressRing radius={35} stroke={4} progress={progress} />
                        </div>

                        <div className="frame">
                            <h2 className="font-bold text-base mb-2">Ablauf-Diagramm</h2>
                            {timelineData.length > 0 ? (
                                <React.Fragment>
                                    <TimelineChart data={timelineData} zoomLevel={zoomLevel} />
                                    <div className="zoom-controls">
                                        <div
                                            className="button nav-button"
                                            onClick={zoomOut}
                                            disabled={zoomLevel === 1}
                                            data-tooltip="Herauszoomen"
                                            aria-label="Herauszoomen"
                                        >
                                            <i className="fas fa-search-minus"></i>
                                        </div>
                                        <div
                                            className="button nav-button"
                                            onClick={zoomIn}
                                            disabled={zoomLevel === 6}
                                            data-tooltip="Hineinzoomen"
                                            aria-label="Hineinzoomen"
                                        >
                                            <i className="fas fa-search-plus"></i>
                                        </div>
                                    </div>
                                </React.Fragment>
                            ) : (
                                <p className="text-sm text-gray-400">Keine Daten verfügbar. Starte das Programm, um Werte aufzuzeichnen.</p>
                            )}
                        </div>

                        <div className="status-bar">
                            {getStatus()}
                        </div>
                    </div>

                    <div className="right-column">
                        <div className="frame">
                            <h2 className="font-bold text-base mb-2">Soll-Werte</h2>
                            <div className="grid grid-cols-2 gap-2">
                                <div className="button temp-button" onClick={() => handleButtonClick('minTempMinus')} data-tooltip="Min. Temperatur senken" aria-label="Min. Temperatur senken">
                                    <i className="fas fa-minus"></i> Temp Min ({steps[currentStepIndex].settings.minTemp.toFixed(1)} °C)
                                </div>
                                <div className="button temp-button" onClick={() => handleButtonClick('minTempPlus')} data-tooltip="Min. Temperatur erhöhen" aria-label="Min. Temperatur erhöhen">
                                    <i className="fas fa-plus"></i> Temp Min
                                </div>
                                <div className="button temp-button" onClick={() => handleButtonClick('maxTempMinus')} data-tooltip="Max. Temperatur senken" aria-label="Max. Temperatur senken">
                                    <i className="fas fa-minus"></i> Temp Max ({steps[currentStepIndex].settings.maxTemp.toFixed(1)} °C)
                                </div>
                                <div className="button temp-button" onClick={() => handleButtonClick('maxTempPlus')} data-tooltip="Max. Temperatur erhöhen" aria-label="Max. Temperatur erhöhen">
                                    <i className="fas fa-plus"></i> Temp Max
                                </div>
                                <div className="button feuchte-button" onClick={() => handleButtonClick('minHumidityMinus')} data-tooltip="Min. Feuchtigkeit senken" aria-label="Min. Feuchtigkeit senken">
                                    <i className="fas fa-minus"></i> Feuchte Min ({steps[currentStepIndex].settings.minHumidity.toFixed(1)} %)
                                </div>
                                <div className="button feuchte-button" onClick={() => handleButtonClick('minHumidityPlus')} data-tooltip="Min. Feuchtigkeit erhöhen" aria-label="Min. Feuchtigkeit erhöhen">
                                    <i className="fas fa-plus"></i> Feuchte Min
                                </div>
                                <div className="button feuchte-button" onClick={() => handleButtonClick('maxHumidityMinus')} data-tooltip="Max. Feuchtigkeit senken" aria-label="Max. Feuchtigkeit senken">
                                    <i className="fas fa-minus"></i> Feuchte Max ({steps[currentStepIndex].settings.maxHumidity.toFixed(1)} %)
                                </div>
                                <div className="button feuchte-button" onClick={() => handleButtonClick('maxHumidityPlus')} data-tooltip="Max. Feuchtigkeit erhöhen" aria-label="Max. Feuchtigkeit erhöhen">
                                    <i className="fas fa-plus"></i> Feuchte Max
                                </div>
                                <div className="button ventilator-button" onClick={() => handleButtonClick('fanMinus')} data-tooltip="Ventilatorgeschwindigkeit senken" aria-label="Ventilatorgeschwindigkeit senken">
                                    <i className="fas fa-minus"></i> Ventilator ({steps[currentStepIndex].settings.fanSpeed} %)
                                </div>
                                <div className="button ventilator-button" onClick={() => handleButtonClick('fanPlus')} data-tooltip="Ventilatorgeschwindigkeit erhöhen" aria-label="Ventilatorgeschwindigkeit erhöhen">
                                    <i className="fas fa-plus"></i> Ventilator
                                </div>
                            </div>
                        </div>

                        <div className="chart-container">
                            {history.map((entry, index) => (
                                <div key={index} style={{ display: 'flex', gap: '4px', width: '18%' }}>
                                    <div
                                        className="chart-bar temp"
                                        style={{ height: `${(entry.temp / 40) * 60}px`, width: '50%' }}
                                        data-tooltip={`Temp: ${entry.temp.toFixed(1)} °C`}
                                    />
                                    <div
                                        className="chart-bar humidity"
                                        style={{ height: `${(entry.humidity / 100) * 60}px`, width: '50%' }}
                                        data-tooltip={`Feuchte: ${entry.humidity.toFixed(1)} %`}
                                    />
                                </div>
                            ))}
                        </div>

                        <div className="frame">
                            <h2 className="font-bold text-base mb-2">Schritt-Navigation</h2>
                            <div className="flex justify-between gap-2">
                                <div
                                    className="button nav-button flex-1"
                                    onClick={handlePrevStep}
                                    disabled={currentStepIndex === 0}
                                    data-tooltip="Zum vorherigen Schritt"
                                    aria-label="Zum vorherigen Schritt"
                                >
                                    <i className="fas fa-arrow-left"></i> Vorheriger
                                </div>
                                <div
                                    className="button nav-button flex-1"
                                    onClick={handleNextStep}
                                    disabled={currentStepIndex === steps.length - 1}
                                    data-tooltip="Zum nächsten Schritt"
                                    aria-label="Zum nächsten Schritt"
                                >
                                    Nächster <i className="fas fa-arrow-right"></i>
                                </div>
                                <div className="button nav-button flex-1" onClick={handleAddStep} data-tooltip="Neuen Schritt hinzufügen" aria-label="Neuen Schritt hinzufügen">
                                    <i className="fas fa-plus"></i> Hinzufügen
                                </div>
                                <div
                                    className="button nav-button flex-1"
                                    onClick={handleDeleteStep}
                                    disabled={steps.length <= 1}
                                    data-tooltip="Aktuellen Schritt löschen"
                                    aria-label="Aktuellen Schritt löschen"
                                >
                                    <i className="fas fa-trash"></i> Löschen
                                </div>
                            </div>
                        </div>

                        <div className="flex gap-2">
                            <div className="button nav-button flex-1" onClick={() => setShowPresets(true)} data-tooltip="Programme auswählen" aria-label="Programme auswählen">
                                <i className="fas fa-list"></i> Programme
                            </div>
                            <div className="button nav-button flex-1" onClick={() => setShowAddProgram(true)} data-tooltip="Neues Programm speichern" aria-label="Neues Programm speichern">
                                <i className="fas fa-save"></i> Programm speichern
                            </div>
                        </div>
                    </div>

                    {showPresets && (
                        <div className="modal">
                            <div className="modal-content">
                                <h2 className="text-lg font-bold mb-4">Programme</h2>
                                {savedPrograms.map(program => (
                                    <div key={program.name}>
                                        <div
                                            className="preset-button"
                                            onClick={() => applyProgram(program)}
                                            aria-label={`Programm ${program.name} anwenden`}
                                        >
                                            {program.name}
                                        </div>
                                        <p className="preset-description">{program.description}</p>
                                    </div>
                                ))}
                                <div
                                    className="preset-button mt-4"
                                    onClick={() => setShowPresets(false)}
                                    data-tooltip="Modal schließen"
                                    aria-label="Modal schließen"
                                >
                                    Schließen
                                </div>
                            </div>
                        </div>
                    )}

                    {showAddProgram && (
                        <div className="modal">
                            <div className="modal-content">
                                <h2 className="text-lg font-bold mb-4">Programm speichern</h2>
                                <div className="flex gap-2 mb-4">
                                    <div
                                        className={`button nav-button flex-1 ${saveMode === 'new' ? 'bg-blue-600' : ''}`}
                                        onClick={() => setSaveMode('new')}
                                        aria-label="Neues Programm anlegen"
                                    >
                                        Neues Programm
                                    </div>
                                    <div
                                        className={`button nav-button flex-1 ${saveMode === 'update' ? 'bg-blue-600' : ''}`}
                                        onClick={() => setSaveMode('update')}
                                        aria-label="Vorhandenes Programm aktualisieren"
                                    >
                                        Programm aktualisieren
                                    </div>
                                </div>
                                {saveMode === 'new' ? (
                                    <input
                                        type="text"
                                        className="duration-input w-full mb-4"
                                        placeholder="Programmname"
                                        value={newProgramName}
                                        onChange={(e) => setNewProgramName(e.target.value)}
                                        aria-label="Programmname eingeben"
                                    />
                                ) : (
                                    <select
                                        className="duration-input w-full mb-4"
                                        value={selectedProgram}
                                        onChange={(e) => setSelectedProgram(e.target.value)}
                                        aria-label="Programm auswählen"
                                    >
                                        <option value="">Programm auswählen</option>
                                        {savedPrograms.map(program => (
                                            <option key={program.name} value={program.name}>{program.name}</option>
                                        ))}
                                    </select>
                                )}
                                {saveMode === 'update' && (
                                    <div className="flex gap-2 mb-4">
                                        <label className="flex items-center">
                                            <input
                                                type="checkbox"
                                                checked={useCurrentSteps}
                                                onChange={() => setUseCurrentSteps(true)}
                                                className="mr-2"
                                            />
                                            Aktuelle Einstellungen speichern
                                        </label>
                                        <label className="flex items-center">
                                            <input
                                                type="checkbox"
                                                checked={!useCurrentSteps}
                                                onChange={() => setUseCurrentSteps(false)}
                                                className="mr-2"
                                            />
                                            Originale Einstellungen beibehalten
                                        </label>
                                    </div>
                                )}
                                <div className="flex gap-2 justify-center">
                                    <div
                                        className="button nav-button"
                                        onClick={addProgram}
                                        data-tooltip="Programm speichern"
                                        aria-label="Programm speichern"
                                    >
                                        Speichern
                                    </div>
                                    <div
                                        className="button nav-button"
                                        onClick={() => {
                                            setShowAddProgram(false);
                                            setNewProgramName('');
                                            setSelectedProgram('');
                                            setSaveMode('new');
                                            setUseCurrentSteps(true);
                                            setError('');
                                        }}
                                        data-tooltip="Abbrechen"
                                        aria-label="Abbrechen"
                                    >
                                        Abbrechen
                                    </div>
                                </div>
                            </div>
                        </div>
                    )}

                    {showEndModal && (
                        <div className="modal">
                            <div className="modal-content">
                                <h2 className="text-lg font-bold mb-4">Programm beendet</h2>
                                <p className="mb-4">Das Reifungsprogramm ist abgeschlossen. Möchten Sie es neu starten?</p>
                                <div className="flex gap-2 justify-center">
                                    <div
                                        className="button nav-button"
                                        onClick={() => {
                                            setIsControlOn(true);
                                            setCurrentStepIndex(0);
                                            setRemainingTime(steps[0].duration);
                                            setProgramEnded(false);
                                            setShowEndModal(false);
                                            setTimelineData([]);
                                            setTimeCounter(0);
                                        }}
                                        aria-label="Programm neu starten"
                                    >
                                        Neu starten
                                    </div>
                                    <div
                                        className="button nav-button"
                                        onClick={() => setShowEndModal(false)}
                                        aria-label="Modal schließen"
                                    >
                                        Schließen
                                    </div>
                                </div>
                            </div>
                        </div>
                    )}
                </div>
            );
        };

        const root = ReactDOM.createRoot(document.getElementById('root'));
        console.log('Rendering App to root');
        root.render(<App />);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/babel-standalone@6.26.0/babel.min.js"></script>
</body>

</html>