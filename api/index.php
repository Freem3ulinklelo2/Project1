<?php
$access = false;
if (isset($_COOKIE['sf_key']) && $_COOKIE['sf_key'] === '1819') {
  $access = true;
}
?>
<?php if (!$access): ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Generate Access Key</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * { box-sizing: border-box; }
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #0d001e, #1c003f);
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }
    .box {
      background: #1c0030;
      padding: 24px;
      border-radius: 20px;
      max-width: 400px;
      width: 90%;
      box-shadow: 0 0 20px #a000ff66;
      text-align: center;
      margin-top: 60px;
    }
    .box h2 {
      font-size: 1.8rem;
      background: linear-gradient(to right, #ff00cc, #3333ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .steps {
      background: #0e0e0e;
      padding: 14px;
      border-radius: 12px;
      margin: 20px 0;
      text-align: left;
      font-size: 0.9rem;
      line-height: 1.5;
    }
    .steps li { margin-bottom: 8px; }

    .btn {
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 1rem;
      font-weight: bold;
      color: #fff;
      margin-bottom: 20px;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      position: relative;
      overflow: hidden;
    }

    .btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: -75%;
      width: 50%;
      height: 100%;
      background: rgba(255, 255, 255, 0.3);
      transform: skewX(-20deg);
      animation: shine 2s infinite;
    }

    @keyframes shine {
      0% { left: -75%; }
      100% { left: 125%; }
    }

    .submit-btn {
      background: linear-gradient(to right, #00ffcc, #00b386);
      color: #000;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 1rem;
      font-weight: bold;
      transition: 0.3s;
    }

    input[type="password"] {
      padding: 12px;
      font-size: 1.1rem;
      width: 80%;
      margin: 10px 0;
      text-align: center;
      border-radius: 8px;
      border: none;
    }
    .error {
      margin-top: 12px;
      font-weight: bold;
      padding: 10px;
      border-radius: 8px;
      display: none;
      animation: shake 0.4s;
    }
    .error.active { display: block; }
    .error.red { background: #ff4d4d; color: #fff; }
    .error.orange { background: #ffaa00; color: #000; }

    .join {
      margin-top: 30px;
      background: #10001d;
      padding: 16px;
      border-radius: 14px;
    }
    .join a {
      text-decoration: none;
      color: #fff;
      display: inline-block;
      margin-top: 10px;
      padding: 10px 20px;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      border-radius: 10px;
      font-weight: bold;
    }

    @keyframes shake {
      0% { transform: translateX(0); }
      25% { transform: translateX(-6px); }
      50% { transform: translateX(6px); }
      75% { transform: translateX(-4px); }
      100% { transform: translateX(0); }
    }
    @keyframes popup {
      0% { transform: scale(0.7); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
    .success-dialog {
      position: fixed;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: #1eff8b;
      color: #000;
      padding: 25px 40px;
      border-radius: 18px;
      font-size: 1.3rem;
      font-weight: bold;
      animation: popup 0.4s ease-out;
      box-shadow: 0 0 25px #0f08;
      z-index: 9999;
      border: 2px solid #00b46f;
    }

    .features {
      display: flex;
      flex-direction: column;
      gap: 16px;
      padding: 40px 20px;
      max-width: 600px;
      width: 100%;
    }
    .feature-card {
      background: #2d0044;
      padding: 18px;
      border-radius: 16px;
      transition: 0.3s;
      border: 1px solid #600080;
    }
    .feature-card:hover {
      background: #3a005a;
      transform: translateY(-4px) scale(1.02);
      box-shadow: 0 0 12px #ff00ff88;
    }
    .feature-card h3 {
      margin: 0;
      margin-bottom: 6px;
      font-size: 1.2rem;
      color: #fff;
    }
    .feature-card p {
      margin: 0;
      font-size: 0.95rem;
      color: #ccc;
    }
  </style>
</head>
<body>
  <div class="box">
    <h2>StreamFlex</h2>
    <h2>Generate Access Key</h2>
    <div class="steps">
      <ol>
        <li>1️⃣ Click on <b>"Generate Access Key"</b></li>
        <li>2️⃣ Complete the required steps to Get Pin.</li>
        <li>3️⃣ After entering the correct PIN, you will get access for <b>7 days</b>.</li>
        <li>🔃 After 7 days, you will have to generate a new access key.</li>
      </ol>
    </div>
    <button class="btn" onclick="window.open('https://gplinks.co/4DIGITKEY', '_blank')">🔑 Generate Access Key</button>
    <input type="password" id="pinInput" maxlength="4" placeholder="Enter 4-digit PIN">
    <button class="submit-btn" onclick="checkPIN()">✅ Submit</button>
    <div class="error red" id="errorBox"></div>
    <div class="join">
      <p>Join Our Community</p>
      <a href="https://t.me/Freem3ulinklelo2" target="_blank">✈️ Join Telegram Channel</a>
    </div>
  </div>

  <div class="features">
    <div class="feature-card"><h3>📺 4K Ultra HD</h3><p>Experience crystal clear picture quality with our 4K streaming that adapts to your internet speed.</p></div>
    <div class="feature-card"><h3>📡 Live Channels</h3><p>Access over 1000+ live channels from sports, news, movies and more — globally.</p></div>
    <div class="feature-card"><h3>🎞️ On Demand</h3><p>Watch thousands of TV shows and movies whenever you want, on demand.</p></div>
    <div class="feature-card"><h3>📱 Multi-Device</h3><p>Stream on Smart TVs, mobile, tablet, or laptop. Up to 5 devices at once.</p></div>
    <div class="feature-card"><h3>🕐 Support</h3><p>Dedicated customer support always available to help with any issue.</p></div>
  </div>

  <script>
    let wrongTries = 0;

    function showError(msg, colorClass) {
      const errorBox = document.getElementById('errorBox');
      errorBox.className = 'error ' + colorClass + ' active';
      errorBox.innerText = msg;
      setTimeout(() => {
        errorBox.classList.remove('active');
      }, 4000);
    }

    function checkPIN() {
      const pin = document.getElementById('pinInput').value;
      if (pin === '1819') {
        const expires = new Date();
        expires.setDate(expires.getDate() + 7);
        document.cookie = "sf_key=1819; expires=" + expires.toUTCString() + "; path=/";
        const dialog = document.createElement('div');
        dialog.className = 'success-dialog';
        dialog.innerText = '✅ Access Granted for 7 Days!';
        document.body.appendChild(dialog);
        setTimeout(() => {
          window.location.reload();
        }, 1800);
      } else {
        wrongTries++;
        if (wrongTries >= 2) {
          showError("⚠️ You Are Entering Wrong Key! Please Generate Your 4 Digit Key And Enter Correct Key To Get Access", "orange");
        } else {
          showError("❌ Wrong PIN! Try again.", "red");
        }
      }
    }
  </script>
</body>
</html>
<?php exit; endif; ?><!-- Original Home Page Code Starts From Here -->


<?php
$context = stream_context_create([
  'http' => [
    'timeout' => 20,
    'user_agent' => 'Mozilla/5.0'
  ]
]);

$m3uContent = file_get_contents("https://raw.githubusercontent.com/alex4528/m3u/refs/heads/main/jstar.m3u", false, $context);

$channels = [];
$groups = [];
$lines = explode("\n", $m3uContent);
$current = null;

foreach ($lines as $line) {
  $line = trim($line);
  if (strpos($line, '#EXTINF:') === 0) {
    preg_match('/tvg-id="([^"]*)".*?group-title="([^"]*)".*?tvg-logo="([^"]*)".*?,(.*)$/', $line, $m);
    $current = [
      'id' => $m[1] ?? '',
      'group' => $m[2] ?? '',
      'logo' => $m[3] ?? '',
      'name' => $m[4] ?? ''
    ];
    if (!in_array($current['group'], $groups)) $groups[] = $current['group'];
  } elseif (strpos($line, 'http') === 0 && $current) {
    $channels[] = $current;
    $current = null;
  }
}
?><!DOCTYPE html><html lang="en">
<head>
  <meta charset="UTF-8">
  <title>StreamFlex | Channels</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <style>
    :root {
      --bg: #0e0e0e;
      --card: #1a1a1a;
      --btn: #007bff;
      --text: #fff;
    }
    body {
      margin:0;
      background: var(--bg);
      color: var(--text);
      font-family: 'Segoe UI', sans-serif;
      transition: .3s;
    }
    .title {
      text-align:center;
      margin:40px 0;
      margin-bottom: 6px;
      font-size:2.5rem;
      font-weight:700;
      background:linear-gradient(270deg,#ff00cc,#3333ff,#00ffee,#ff00cc);
      background-size:800% 800%;
      -webkit-background-clip:text;
      -webkit-text-fill-color:transparent;
      animation:move 8s ease infinite;
    }
    @keyframes move {0%{background-position:0% 50%}50%{background-position:100% 50%}100%{background-position:0% 50%}}
    .container{max-width:1400px;margin:auto;padding:20px;}
    .controls{display:flex;justify-content:center;flex-wrap:wrap;gap:10px;margin-bottom:20px;}
    select,input{padding:10px;border-radius:8px;border:1px solid #444;background:var(--card);color:var(--text);font-size:1rem;transition:.3s;}
    .channel-list{display:grid;grid-template-columns:repeat(2,1fr);gap:18px;}
    .channel{background:var(--card);border:1px solid #333;padding:12px;border-radius:14px;text-align:center;transition:.3s;cursor:pointer;position:relative;}
    .channel:hover{background:#292929;transform:translateY(-6px) scale(1.03);box-shadow:0 12px 25px rgba(0,0,0,0.6);}
    .channel img{width:80px;height:auto;margin-bottom:10px;border-radius:10px;background:#222;}
    .channel-name{font-size:1rem;font-weight:600;margin-bottom:4px;}
    .channel-group{font-size:0.85rem;color:#aaa;margin-bottom:8px;}
    .watch-btn{margin-top:4px;padding:6px 18px;background:var(--btn);color:#fff;border:none;border-radius:8px;font-weight:bold;cursor:pointer;transition:.2s;text-decoration:none;}
    .watch-btn:hover{background:#0056b3;transform:scale(1.05);}
    #keyTimerBadge {
      position:fixed; top:8px; right:8px;
      background:linear-gradient(135deg,#ff0080,#7928ca);
      color:#fff; padding:6px 14px; border-radius:20px;
      font-size:0.9rem; font-weight:600; display:none; z-index:9999;
    }
    .blink { animation: blinkAnim 1s step-start infinite; }
    @keyframes blinkAnim { 50% { opacity: 0; } }


    }
  </style>
</head>
<body>
  <div class="title">StreamFlex</div>
  <div class="container">
    <div class="controls">
      <select id="groupSelect" onchange="filterChannels()">
        <option value="all">All Categories</option>
        <?php foreach ($groups as $g): ?>
          <option value="<?=htmlspecialchars($g)?>"><?=htmlspecialchars($g)?></option>
        <?php endforeach; ?>
      </select>
      <select id="themeSelect" onchange="changeTheme()">
        <option value="default">Default</option>
        <option value="yellow">Yellow</option>
        <option value="pink">Pink</option>
        <option value="amoled">Amoled Dark</option>
        <option value="blue">Blue</option>
        <option value="sunset">Sunset Red</option>
        <option value="aqua">Aqua Neon</option>
        <option value="purple">Purple Luxe</option>
        <option value="mint">Mint Green</option>
        <option value="cyber">Cyberpunk Glow</option>
      </select>
      <input type="text" id="searchBox" placeholder="Search channels..." onkeyup="filterChannels()">
    </div>
    <div class="channel-list" id="channelList">
      <?php foreach ($channels as $ch): ?>
        <div class="channel" data-name="<?=strtolower($ch['name'])?>" data-group="<?=htmlspecialchars(strtolower($ch['group']))?>">
          <img src="<?=htmlspecialchars($ch['logo'])?>" alt="<?=htmlspecialchars($ch['name'])?>">
          <div class="channel-name"><?=htmlspecialchars($ch['name'])?></div>
          <div class="channel-group"><?=htmlspecialchars($ch['group'])?></div>
          <a class="watch-btn" href="p.php?id=<?=urlencode($ch['id'])?>">Watch</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div id="keyTimerBadge">NEW KEY IN ⏰ 168:00:00</div>
  
  <script>
    const themeSelect = document.getElementById('themeSelect');
    const stored = localStorage.getItem('sf_theme');
    if (stored) themeSelect.value = stored;
    changeTheme();
    themeSelect.addEventListener('change', () => {
      localStorage.setItem('sf_theme', themeSelect.value);
      changeTheme();
    });function changeTheme(){
  const t = themeSelect.value;
  const root = document.documentElement.style;
  const themes = {
    default:['#0e0e0e','#1a1a1a','#007bff','#ffffff'],
    yellow:['#222','#333','#ffcc00','#fff'],
    pink:['#2a002a','#3a003a','#ff66b2','#fff'],
    amoled:['#000','#121212','#ff9900','#fff'],
    blue:['#001f3f','#003366','#007bff','#fff'],
    sunset:['#1b0c12','#2a0f19','#ff4d4d','#ffecec'],
    aqua:['#001f23','#002e34','#00ffff','#e0ffff'],
    purple:['#1b1128','#2e1a40','#c77dff','#f2e6ff'],
    mint:['#0f1f1c','#1c2f2b','#80ffcc','#eafff5'],
    cyber:['#01010c','#111122','#ff00ff','#e0e0ff']
  };
  const [bg,card,btn,text] = themes[t] || themes.default;
  root.setProperty('--bg',bg);
  root.setProperty('--card',card);
  root.setProperty('--btn',btn);
  root.setProperty('--text',text);
}

function filterChannels(){
  const grp = document.getElementById('groupSelect').value;
  const s = document.getElementById('searchBox').value.toLowerCase();
  document.querySelectorAll('.channel').forEach(ch=>{
    const matches = (grp==='all'|| ch.dataset.group===grp.toLowerCase())
      && ch.dataset.name.includes(s);
    ch.style.display = matches?'block':'none';
  });
}

const badge = document.getElementById('keyTimerBadge');
const DURATION = 168 * 3600 * 1000;

function getResetEndTime() {
  const stored = localStorage.getItem('sf_end');
  let end = stored ? parseInt(stored) : Date.now() + DURATION;

  if (Date.now() >= end) {
    end = Date.now() + DURATION;
    localStorage.setItem('sf_end', end);
  }

  return end;
}

let T = getResetEndTime();

function showBadge() {
  badge.style.display = 'block';
  badge.style.animation = 'none';
  void badge.offsetWidth;
  badge.style.animation = 'fadeinout 15s ease forwards';
  setTimeout(() => badge.style.display = 'none', 15000);
}

showBadge();
setInterval(showBadge, 10000);

function update() {
  if (Date.now() >= T) {
    T = getResetEndTime();
  }

  let d = T - Date.now();
  if (d < 0) d = 0;
  const h = String(Math.floor(d / 3600000)).padStart(2, '0'),
        m = String(Math.floor((d % 3600000) / 60000)).padStart(2, '0'),
        s = String(Math.floor((d % 60000) / 1000)).padStart(2, '0');

  badge.innerHTML = `NEW KEY IN ⏰ ${h}:${m}:${s}`;
  if (d <= 7200000) badge.classList.add('blink');
  else badge.classList.remove('blink');

  requestAnimationFrame(update);
}

update();
  </script>
</body>
</html>
