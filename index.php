<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#f6f5ef">
  <title>สร้างบัญชี | ECO Wardrobe</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Noto+Sans+Thai:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      color-scheme: light;
      --ink: #202b25;
      --muted: #788078;
      --paper: #f6f5ef;
      --line: #dedfd6;
      --green: #2f5945;
      --lime: #d7ed9f;
      --coral: #e77e63;
    }

    * { box-sizing: border-box; }

    body {
      min-width: 0;
      min-height: 100vh;
      margin: 0;
      background: var(--paper);
      color: var(--ink);
      font-family: "DM Sans", "Noto Sans Thai", sans-serif;
      -webkit-font-smoothing: antialiased;
    }

    a { color: inherit; }

    .page-shell {
      display: grid;
      min-height: 100vh;
      grid-template-columns: minmax(360px, 0.94fr) minmax(470px, 1.06fr);
    }

    .visual-panel {
      position: relative;
      display: flex;
      min-height: 720px;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden;
      padding: 38px 44px 42px;
      background: #355747;
      color: #fffdf6;
      isolation: isolate;
    }

    .visual-panel::after {
      position: absolute;
      z-index: -1;
      inset: 0;
      background: linear-gradient(135deg, rgba(48, 83, 65, .15), transparent 55%);
      content: "";
    }

    .brand {
      display: inline-flex;
      width: fit-content;
      align-items: center;
      gap: 10px;
      color: inherit;
      font-size: 15px;
      font-weight: 700;
      letter-spacing: .04em;
      text-decoration: none;
    }

    .brand-mark {
      display: grid;
      width: 34px;
      height: 34px;
      place-items: center;
      border: 1px solid rgba(255, 255, 255, .75);
      border-radius: 50%;
      font-size: 17px;
      line-height: 1;
    }

    .visual-copy {
      max-width: 460px;
      padding-bottom: 15px;
      animation: copy-arrive .7s .12s ease-out both;
    }

    .eyebrow {
      display: flex;
      align-items: center;
      gap: 9px;
      margin: 0 0 18px;
      color: var(--lime);
      font-size: 12px;
      font-weight: 700;
      letter-spacing: .14em;
      text-transform: uppercase;
    }

    .eyebrow::before {
      width: 22px;
      height: 1px;
      background: currentColor;
      content: "";
    }

    .visual-copy h2 {
      max-width: 430px;
      margin: 0;
      font-family: "Noto Sans Thai", sans-serif;
      font-size: clamp(32px, 4vw, 52px);
      font-weight: 600;
      line-height: 1.28;
    }

    .visual-copy p {
      max-width: 360px;
      margin: 18px 0 0;
      color: rgba(255, 253, 246, .82);
      font-size: 14px;
      line-height: 1.8;
    }

    .visual-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      color: rgba(255, 253, 246, .78);
      font-size: 11px;
      letter-spacing: .08em;
      text-transform: uppercase;
    }

    .visual-footer span:last-child { color: var(--lime); }

    .form-panel {
      display: flex;
      min-width: 0;
      align-items: center;
      justify-content: center;
      padding: 48px clamp(28px, 7vw, 108px);
    }

    .form-content {
      width: min(100%, 430px);
      animation: copy-arrive .65s .08s ease-out both;
    }

    .form-topline {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 7px;
      margin-bottom: 46px;
      color: var(--muted);
      font-size: 13px;
    }

    .form-topline a {
      color: var(--green);
      font-weight: 700;
      text-decoration-thickness: 1px;
      text-underline-offset: 3px;
    }

    .form-heading { margin-bottom: 29px; }

    .form-heading .eyebrow {
      margin-bottom: 12px;
      color: #668358;
      font-size: 10px;
    }

    .form-heading h1 {
      margin: 0;
      font-family: "Noto Sans Thai", sans-serif;
      font-size: 32px;
      font-weight: 600;
      line-height: 1.4;
    }

    .form-heading p {
      margin: 8px 0 0;
      color: var(--muted);
      font-size: 14px;
      line-height: 1.7;
    }

    .field { margin-bottom: 16px; }

    .field label {
      display: block;
      margin-bottom: 7px;
      font-size: 13px;
      font-weight: 600;
    }

    .field input {
      width: 100%;
      height: 49px;
      padding: 0 14px;
      border: 1px solid var(--line);
      border-radius: 5px;
      outline: none;
      background: rgba(255, 255, 255, .64);
      color: var(--ink);
      font: inherit;
      font-size: 14px;
      transition: border-color .18s ease, box-shadow .18s ease, background .18s ease;
    }

    .field input::placeholder { color: #a0a49d; }

    .field input:focus {
      border-color: var(--green);
      background: #fff;
      box-shadow: 0 0 0 3px rgba(47, 89, 69, .1);
    }

    .password-hint {
      margin: 7px 0 0;
      color: var(--muted);
      font-size: 11px;
    }

    .terms-row {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin: 20px 0 22px;
      color: #626a63;
      font-size: 12px;
      line-height: 1.7;
    }

    .terms-row input {
      width: 16px;
      height: 16px;
      flex: 0 0 auto;
      margin: 2px 0 0;
      accent-color: var(--green);
    }

    .terms-row a { color: var(--green); text-underline-offset: 2px; }

    .submit-button {
      display: flex;
      width: 100%;
      height: 51px;
      align-items: center;
      justify-content: center;
      gap: 11px;
      border: 0;
      border-radius: 5px;
      background: var(--green);
      color: #fffdf6;
      cursor: pointer;
      font: inherit;
      font-size: 14px;
      font-weight: 700;
      transition: background .18s ease, transform .18s ease;
    }

    .submit-button:hover { background: #244634; }
    .submit-button:active { transform: translateY(1px); }

    .submit-button span {
      color: var(--lime);
      font-size: 18px;
      line-height: 1;
      transition: transform .18s ease;
    }

    .submit-button:hover span { transform: translateX(3px); }

    .form-note {
      margin: 23px 0 0;
      color: #90958d;
      font-size: 11px;
      text-align: center;
    }

    @keyframes image-arrive {
      from { transform: scale(1.035); opacity: .7; }
      to { transform: scale(1); opacity: 1; }
    }

    @keyframes copy-arrive {
      from { transform: translateY(10px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @media (max-width: 900px) {
      .page-shell { grid-template-columns: minmax(280px, .82fr) minmax(400px, 1.18fr); }
      .visual-panel { padding-right: 30px; padding-left: 30px; }
      .form-panel { padding-right: 38px; padding-left: 38px; }
    }

    @media (max-width: 700px) {
      .page-shell { display: block; }
      .visual-panel {
        min-height: 270px;
        padding: 22px 24px 25px;
      }
      .visual-panel::before { background-position: center 38%; }
      .brand-mark { width: 30px; height: 30px; }
      .visual-copy { padding: 30px 0 0; }
      .visual-copy .eyebrow { margin-bottom: 8px; }
      .visual-copy h2 { max-width: 370px; font-size: 27px; }
      .visual-copy p { margin-top: 8px; font-size: 12px; }
      .visual-footer { display: none; }
      .form-panel { padding: 30px 24px 40px; }
      .form-content { max-width: 460px; }
      .form-topline { margin-bottom: 31px; }
      .form-heading { margin-bottom: 23px; }
      .form-heading h1 { font-size: 29px; }
    }

    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after {
        animation-duration: .01ms !important;
        animation-iteration-count: 1 !important;
        scroll-behavior: auto !important;
        transition-duration: .01ms !important;
      }
    }

    body {
      min-width: 0;
      min-height: 100svh;
      padding: 24px;
      background: #f5f7f4;
    }

    .page-shell {
      display: flex;
      min-height: calc(100svh - 48px);
      align-items: center;
      justify-content: center;
    }

    .visual-panel { display: none; }

    .form-panel {
      width: 100%;
      min-height: 0;
      justify-content: center;
      padding: 0;
    }

    .form-content {
      width: min(100%, 410px);
      padding: 34px;
      border: 1px solid #e5e9e5;
      border-radius: 8px;
      background: #fff;
      box-shadow: 0 8px 28px rgba(33, 54, 39, .05);
      animation: none;
    }

    .form-topline { margin-bottom: 28px; }
    .form-heading .eyebrow { display: none; }

    @media (max-width: 700px) {
      body { padding: 16px; }
      .page-shell { min-height: calc(100svh - 32px); }
      .form-content { padding: 26px 22px; }
    }
  </style>
</head>
<body>
  <main class="page-shell">
    <section class="form-panel" aria-labelledby="register-title">
      <div class="form-content">
        <div class="form-topline">
          <span>มีบัญชีอยู่แล้ว?</span>
          <a href="login.php">เข้าสู่ระบบ</a>
        </div>

        <header class="form-heading">
          <h1 id="register-title">สร้างบัญชีใหม่</h1>
          <p>สมัครสมาชิกเพื่อเริ่มต้นเลือกชิ้นโปรดของคุณ</p>
        </header>

        <form id="register-form" action="#" method="post">
          <div class="field">
            <label for="full-name">ชื่อ-นามสกุล</label>
            <input id="full-name" name="fullname" type="text" placeholder="เช่น ณิชา ใจดี" autocomplete="name" required>
          </div>

          <div class="field">
            <label for="email">อีเมล</label>
            <input id="email" name="email" type="email" placeholder="you@example.com" autocomplete="email" required>
          </div>

          <div class="field">
            <label for="password">รหัสผ่าน</label>
            <input id="password" name="password" type="password" placeholder="อย่างน้อย 8 ตัวอักษร" autocomplete="new-password" minlength="8" required>
            <p class="password-hint">ใช้ตัวอักษรอย่างน้อย 8 ตัวเพื่อความปลอดภัย</p>
          </div>

          <div class="field">
            <label for="confirm-password">ยืนยันรหัสผ่าน</label>
            <input id="confirm-password" name="confirm_password" type="password" placeholder="กรอกรหัสผ่านอีกครั้ง" autocomplete="new-password" minlength="8" required>
          </div>

          <label class="terms-row" for="terms">
            <input id="terms" name="terms" type="checkbox" value="accepted" required>
            <span>ฉันยอมรับ <a href="#terms">เงื่อนไขการใช้งาน</a> และ <a href="#privacy">นโยบายความเป็นส่วนตัว</a></span>
          </label>

          <button class="submit-button" type="submit">สร้างบัญชี <span aria-hidden="true">&#8594;</span></button>
          <p class="form-note">ข้อมูลของคุณจะถูกเก็บรักษาอย่างปลอดภัย</p>
        </form>
      </div>
    </section>
  </main>
  <script>
    const registerForm = document.querySelector("#register-form");
    const passwordInput = document.querySelector("#password");
    const confirmInput = document.querySelector("#confirm-password");

    confirmInput.addEventListener("input", () => {
      confirmInput.setCustomValidity(
        confirmInput.value && confirmInput.value !== passwordInput.value
          ? "รหัสผ่านไม่ตรงกัน"
          : ""
      );
    });

    passwordInput.addEventListener("input", () => {
      confirmInput.dispatchEvent(new Event("input"));
    });

    registerForm.addEventListener("submit", (event) => {
      event.preventDefault();
      confirmInput.dispatchEvent(new Event("input"));
      if (!registerForm.reportValidity()) return;
    });
  </script>
</body>
</html>