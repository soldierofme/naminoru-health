import React, { useState, useEffect, useRef } from 'react';
import { Player } from '@lottiefiles/react-lottie-player';

const EmotionTracker = () => {
  const [emotion, setEmotion] = useState('normal');
  const [cause, setCause] = useState('');
  const [activities, setActivities] = useState([]);
  const [points, setPoints] = useState(0);
  const [level, setLevel] = useState(1);
  const playerRef = useRef(null);

  useEffect(() => {
    setLevel(Math.floor(points / 100) + 1);
  }, [points]);

  const handleEmotionSelect = (selectedEmotion) => {
    setEmotion(selectedEmotion);
    setPoints(prev => prev + 10);
  };

  const handleCauseSelect = (selectedCause) => {
    setCause(selectedCause);
    setPoints(prev => prev + 5);
  };

  const handleActivityToggle = (activity) => {
    setActivities(prev => 
      prev.includes(activity) 
        ? prev.filter(a => a !== activity)
        : [...prev, activity]
    );
    setPoints(prev => prev + 20);
  };

  return (
    <div className="p-4 max-w-md mx-auto">
      <h1 className="text-2xl font-bold mb-4">感情トラッカー</h1>
      
      {/* 感情選択 */}
      <div className="mb-4">
        <h2 className="text-xl mb-2">今日の気分</h2>
        {['happy', 'sad', 'angry', 'excited', 'calm'].map(emotionType => (
          <button
            key={emotionType}
            onClick={() => handleEmotionSelect(emotionType)}
            className={`mr-2 mb-2 px-4 py-2 rounded ${emotion === emotionType ? 'bg-blue-500 text-white' : 'bg-gray-200'}`}
          >
            {emotionType}
          </button>
        ))}
      </div>

      {/* 原因選択 */}
      <div className="mb-4">
        <h2 className="text-xl mb-2">原因</h2>
        <select 
          value={cause} 
          onChange={(e) => handleCauseSelect(e.target.value)}
          className="w-full p-2 border rounded"
        >
          <option value="">選択してください</option>
          <option value="friends">友達関係</option>
          <option value="family">家族</option>
          <option value="school">学校生活</option>
          <option value="health">健康</option>
          <option value="other">その他</option>
        </select>
      </div>

      {/* アクティビティ選択 */}
      <div className="mb-4">
        <h2 className="text-xl mb-2">今日のアクティビティ</h2>
        {['exercise', 'study', 'hobby', 'rest'].map(activity => (
          <button
            key={activity}
            onClick={() => handleActivityToggle(activity)}
            className={`mr-2 mb-2 px-4 py-2 rounded ${activities.includes(activity) ? 'bg-green-500 text-white' : 'bg-gray-200'}`}
          >
            {activity}
          </button>
        ))}
      </div>

      <div className="mt-4">
        <p>レベル: {level}</p>
        <p>ポイント: {points}</p>
      </div>
    </div>
  );
};

export default EmotionTracker;