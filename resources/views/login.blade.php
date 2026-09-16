<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login — Apotek Besok Sembuh</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --bg: #020907;
            --bg-2: #041510;
            --surface: #071c15;
            --surface-2: #0a241b;

            --primary: #10b981;
            --primary-light: #34d399;
            --primary-soft: #6ee7b7;
            --primary-dark: #047857;

            --text: #ecfdf5;
            --text-soft: #b7d2c8;
            --muted: #78978d;
            --muted-dark: #4f7066;

            --border: rgba(255, 255, 255, .075);
            --border-light: rgba(255, 255, 255, .11);

            --danger: #f87171;

            --mouse-x: 50%;
            --mouse-y: 50%;

            --tilt-x: 0deg;
            --tilt-y: 0deg;

            --shadow:
                0 45px 120px rgba(0, 0, 0, .55);
        }

        html {
            min-height: 100%;
            background: var(--bg);
        }

        body {
            min-height: 100vh;
            font-family:
                Inter,
                ui-sans-serif,
                system-ui,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;

            color: var(--text);

            background:
                radial-gradient(
                    700px circle at var(--mouse-x) var(--mouse-y),
                    rgba(16, 185, 129, .065),
                    transparent 58%
                ),
                radial-gradient(
                    600px circle at 8% 5%,
                    rgba(16, 185, 129, .11),
                    transparent 55%
                ),
                radial-gradient(
                    650px circle at 100% 100%,
                    rgba(20, 184, 166, .075),
                    transparent 55%
                ),
                linear-gradient(
                    135deg,
                    #020907 0%,
                    #03130e 48%,
                    #061b14 100%
                );

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 30px;

            overflow-x: hidden;
        }

        /* =========================================================
           AMBIENT BACKGROUND
        ========================================================= */

        .ambient {
            position: fixed;
            inset: 0;
            overflow: hidden;
            pointer-events: none;
            z-index: 0;
        }

        .ambient::before {
            content: "";
            position: absolute;
            inset: 0;

            background-image:
                linear-gradient(
                    rgba(255,255,255,.018) 1px,
                    transparent 1px
                ),
                linear-gradient(
                    90deg,
                    rgba(255,255,255,.018) 1px,
                    transparent 1px
                );

            background-size: 55px 55px;

            mask-image:
                radial-gradient(
                    circle at center,
                    black,
                    transparent 75%
                );

            opacity: .35;
        }

        .ambient-orb {
            position: absolute;

            width: 420px;
            height: 420px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(16,185,129,.13),
                    rgba(16,185,129,.025) 42%,
                    transparent 70%
                );

            filter: blur(2px);

            animation:
                floatOrb 13s ease-in-out infinite;
        }

        .orb-one {
            top: -180px;
            left: -150px;
        }

        .orb-two {
            right: -160px;
            bottom: -170px;

            width: 520px;
            height: 520px;

            animation-delay: -6s;
        }

        @keyframes floatOrb {
            0%,
            100% {
                transform:
                    translate3d(0,0,0)
                    scale(1);
            }

            50% {
                transform:
                    translate3d(35px,-25px,0)
                    scale(1.08);
            }
        }

        .background-word {
            position: fixed;

            right: -85px;
            bottom: -45px;

            font-size:
                clamp(130px, 18vw, 300px);

            line-height: .72;

            font-weight: 950;

            letter-spacing: -.1em;

            color:
                rgba(52,211,153,.018);

            user-select: none;
            pointer-events: none;

            white-space: nowrap;

            z-index: 0;
        }

        .background-line {
            position: fixed;

            width: 620px;
            height: 620px;

            border:
                1px solid
                rgba(52,211,153,.045);

            border-radius: 50%;

            right: -290px;
            top: -230px;

            pointer-events: none;

            animation:
                slowRotate 35s linear infinite;

            z-index: 0;
        }

        .background-line::before {
            content: "";

            position: absolute;

            inset: 55px;

            border:
                1px solid
                rgba(52,211,153,.032);

            border-radius: 50%;
        }

        .background-line::after {
            content: "";

            position: absolute;

            inset: 115px;

            border:
                1px dashed
                rgba(52,211,153,.025);

            border-radius: 50%;
        }

        @keyframes slowRotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* =========================================================
           MAIN CARD
        ========================================================= */

        .login-shell {
            position: relative;

            width: min(1180px, 100%);

            min-height: 700px;

            display: grid;

            grid-template-columns:
                1.16fr .84fr;

            background:
                linear-gradient(
                    135deg,
                    rgba(9,32,25,.96),
                    rgba(3,16,12,.985)
                );

            border:
                1px solid
                rgba(255,255,255,.095);

            border-radius: 30px;

            box-shadow:
                var(--shadow),
                inset 0 1px 0 rgba(255,255,255,.045);

            overflow: hidden;

            z-index: 2;

            transform:
                perspective(1700px)
                rotateX(var(--tilt-x))
                rotateY(var(--tilt-y));

            transition:
                transform .15s ease-out,
                box-shadow .35s ease;
        }

        .login-shell::before {
            content: "";

            position: absolute;

            inset: 0;

            background:
                radial-gradient(
                    500px circle at
                    var(--mouse-x)
                    var(--mouse-y),
                    rgba(52,211,153,.065),
                    transparent 68%
                );

            pointer-events: none;

            z-index: 5;
        }

        .login-shell::after {
            content: "";

            position: absolute;

            left: 0;
            right: 0;
            top: 0;

            height: 1px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(52,211,153,.5),
                    transparent
                );

            opacity: .65;

            pointer-events: none;

            z-index: 10;
        }

        .login-shell:hover {
            box-shadow:
                0 55px 140px rgba(0,0,0,.58),
                0 0 70px rgba(16,185,129,.035),
                inset 0 1px 0 rgba(255,255,255,.055);
        }

        /* =========================================================
           LEFT SIDE
        ========================================================= */

        .intro {
            position: relative;

            padding:
                62px 70px;

            display: flex;

            flex-direction: column;

            justify-content: space-between;

            border-right:
                1px solid
                rgba(255,255,255,.055);

            z-index: 2;

            overflow: hidden;
        }

        .intro::before {
            content: "";

            position: absolute;

            width: 520px;
            height: 520px;

            right: -260px;
            top: 50%;

            transform: translateY(-50%);

            border-radius: 50%;

            border:
                1px solid
                rgba(52,211,153,.035);

            pointer-events: none;
        }

        .intro::after {
            content: "";

            position: absolute;

            width: 250px;
            height: 250px;

            right: -125px;
            top: 50%;

            transform: translateY(-50%);

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(16,185,129,.055),
                    transparent 70%
                );

            filter: blur(5px);

            pointer-events: none;
        }

        /* =========================================================
           BRAND
        ========================================================= */

        .brand {
            display: flex;

            align-items: center;

            gap: 17px;

            width: fit-content;

            cursor: default;

            position: relative;

            z-index: 3;
        }

        .brand-logo {
            position: relative;

            width: 64px;
            height: 64px;

            flex-shrink: 0;

            transition:
                transform .4s cubic-bezier(.2,.8,.2,1),
                filter .4s ease;
        }

        .brand-logo::before {
            content: "";

            position: absolute;

            inset: -12px;

            border-radius: 22px;

            background:
                radial-gradient(
                    circle,
                    rgba(16,185,129,.17),
                    transparent 68%
                );

            opacity: .7;

            transition:
                transform .4s ease,
                opacity .4s ease;
        }

        .brand:hover .brand-logo {
            transform:
                translateY(-4px)
                rotate(-4deg)
                scale(1.06);

            filter:
                drop-shadow(
                    0 16px 32px
                    rgba(16,185,129,.34)
                );
        }

        .brand:hover .brand-logo::before {
            transform: scale(1.25);
            opacity: 1;
        }

        .brand-logo svg {
            position: relative;

            width: 100%;
            height: 100%;

            display: block;

            filter:
                drop-shadow(
                    0 10px 25px
                    rgba(16,185,129,.2)
                );
        }

        .brand-name {
            display: flex;

            flex-direction: column;

            line-height: .9;
        }

        .brand-name span {
            color:
                var(--primary-light);

            font-size: 10px;

            font-weight: 850;

            letter-spacing: .4em;

            margin-bottom: 9px;
        }

        .brand-name strong {
            color: var(--text);

            font-size: 22px;

            font-weight: 900;

            letter-spacing: -.045em;
        }

        /* =========================================================
           INTRO CONTENT
        ========================================================= */

        .intro-content {
            margin-top: 30px;

            max-width: 620px;

            position: relative;

            z-index: 3;

            animation:
                fadeUp .75s .08s both;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;

                transform:
                    translateY(20px);
            }

            to {
                opacity: 1;

                transform:
                    translateY(0);
            }
        }

        .eyebrow {
            display: inline-flex;

            align-items: center;

            gap: 9px;

            margin-bottom: 22px;

            color:
                var(--primary-light);

            font-size: 10px;

            font-weight: 850;

            letter-spacing: .2em;

            text-transform: uppercase;
        }

        .eyebrow::before {
            content: "";

            width: 28px;
            height: 2px;

            background:
                linear-gradient(
                    90deg,
                    var(--primary-dark),
                    var(--primary-light)
                );

            border-radius: 20px;

            transition:
                width .35s ease;
        }

        .intro:hover .eyebrow::before {
            width: 48px;
        }

        .intro h1 {
            font-size:
                clamp(48px, 5vw, 70px);

            line-height: .96;

            letter-spacing: -.07em;

            font-weight: 950;

            max-width: 630px;

            text-wrap: balance;
        }

        .intro h1 span {
            display: block;

            margin-top: 3px;

            color:
                var(--primary-light);

            background:
                linear-gradient(
                    90deg,
                    #34d399,
                    #10b981,
                    #6ee7b7,
                    #34d399
                );

            background-size: 250% auto;

            -webkit-background-clip: text;
            background-clip: text;

            -webkit-text-fill-color: transparent;

            animation:
                gradientMove 5s linear infinite;
        }

        @keyframes gradientMove {
            to {
                background-position: 250% center;
            }
        }

        .intro-description {
            max-width: 520px;

            margin-top: 26px;

            color:
                var(--text-soft);

            font-size: 15px;

            line-height: 1.8;

            opacity: .9;
        }

        /* =========================================================
           FEATURES
        ========================================================= */

        .features {
            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 10px;

            max-width: 520px;

            margin-top: 35px;
        }

        .feature {
            position: relative;

            display: flex;

            align-items: center;

            gap: 11px;

            min-height: 53px;

            padding:
                11px 14px;

            background:
                linear-gradient(
                    135deg,
                    rgba(255,255,255,.035),
                    rgba(255,255,255,.018)
                );

            border:
                1px solid
                rgba(255,255,255,.06);

            border-radius: 12px;

            color:
                var(--text-soft);

            font-size: 12px;

            font-weight: 650;

            overflow: hidden;

            cursor: default;

            transition:
                transform .3s cubic-bezier(.2,.8,.2,1),
                border-color .3s ease,
                background .3s ease,
                box-shadow .3s ease;
        }

        .feature::before {
            content: "";

            position: absolute;

            inset: 0;

            background:
                radial-gradient(
                    150px circle at
                    var(--feature-x, 50%)
                    var(--feature-y, 50%),
                    rgba(52,211,153,.13),
                    transparent 70%
                );

            opacity: 0;

            transition:
                opacity .25s ease;
        }

        .feature::after {
            content: "";

            position: absolute;

            left: -100%;

            top: 0;

            width: 60%;

            height: 1px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(52,211,153,.65),
                    transparent
                );

            transition:
                left .55s ease;
        }

        .feature:hover {
            transform:
                translateY(-4px);

            border-color:
                rgba(52,211,153,.2);

            background:
                rgba(16,185,129,.055);

            box-shadow:
                0 14px 30px
                rgba(0,0,0,.18);
        }

        .feature:hover::before {
            opacity: 1;
        }

        .feature:hover::after {
            left: 140%;
        }

        .feature-icon {
            position: relative;

            z-index: 1;

            width: 29px;
            height: 29px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 9px;

            background:
                rgba(16,185,129,.1);

            border:
                1px solid
                rgba(52,211,153,.07);

            color:
                var(--primary-light);

            font-size: 12px;

            flex-shrink: 0;

            transition:
                transform .3s ease,
                background .3s ease;
        }

        .feature:hover .feature-icon {
            transform:
                rotate(-6deg)
                scale(1.1);

            background:
                rgba(16,185,129,.17);
        }

        .feature span {
            position: relative;
            z-index: 1;
        }

        /* =========================================================
           TAGLINE
        ========================================================= */

        .tagline-box {
            display: flex;

            align-items: flex-start;

            gap: 14px;

            max-width: 520px;

            margin-top: 34px;

            padding:
                15px 17px;

            border-left:
                2px solid
                var(--primary);

            background:
                linear-gradient(
                    90deg,
                    rgba(16,185,129,.045),
                    transparent
                );

            border-radius:
                0 10px 10px 0;
        }

        .tagline-mark {
            display: flex;

            gap: 3px;

            padding-top: 8px;
        }

        .tagline-mark span {
            width: 4px;
            height: 4px;

            border-radius: 50%;

            background:
                var(--primary-light);

            animation:
                dotPulse 1.8s ease-in-out infinite;
        }

        .tagline-mark span:nth-child(2) {
            animation-delay: .2s;
        }

        .tagline-mark span:nth-child(3) {
            animation-delay: .4s;
        }

        @keyframes dotPulse {
            0%,
            100% {
                opacity: .3;

                transform:
                    translateY(0);
            }

            50% {
                opacity: 1;

                transform:
                    translateY(-3px);
            }
        }

        .tagline-box p {
            color:
                var(--muted);

            font-size: 12px;

            line-height: 1.7;
        }

        .tagline-box strong {
            display: block;

            color:
                var(--text-soft);

            font-weight: 750;
        }

        /* =========================================================
           LEFT FOOTER
        ========================================================= */

        .intro-footer {
            display: flex;

            align-items: center;

            gap: 10px;

            color:
                #52766b;

            font-size: 10px;

            font-weight: 650;

            position: relative;

            z-index: 3;
        }

        .footer-dot {
            width: 6px;
            height: 6px;

            border-radius: 50%;

            background:
                var(--primary);

            box-shadow:
                0 0 0 4px
                rgba(16,185,129,.08);

            animation:
                statusPulse 2s ease-in-out infinite;
        }

        @keyframes statusPulse {
            50% {
                box-shadow:
                    0 0 0 8px
                    rgba(16,185,129,0);
            }
        }

        /* =========================================================
           RIGHT LOGIN PANEL
        ========================================================= */

        .login-panel {
            position: relative;

            display: flex;

            align-items: center;

            justify-content: center;

            padding:
                55px 50px;

            background:
                linear-gradient(
                    135deg,
                    rgba(2,13,10,.65),
                    rgba(4,20,15,.42)
                );

            z-index: 2;
        }

        .login-panel::before {
            content: "";

            position: absolute;

            width: 430px;
            height: 430px;

            right: -240px;
            top: -160px;

            border:
                1px solid
                rgba(52,211,153,.035);

            border-radius: 50%;

            pointer-events: none;

            animation:
                slowRotate 25s linear infinite;
        }

        .login-panel::after {
            content: "";

            position: absolute;

            width: 280px;
            height: 280px;

            left: -180px;
            bottom: -170px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(16,185,129,.07),
                    transparent 70%
                );

            pointer-events: none;
        }

        .login-box {
            position: relative;

            width: 100%;

            max-width: 370px;

            padding:
                30px;

            border:
                1px solid
                rgba(255,255,255,.075);

            border-radius: 22px;

            background:
                linear-gradient(
                    145deg,
                    rgba(12,39,31,.72),
                    rgba(4,20,15,.54)
                );

            box-shadow:
                0 30px 70px rgba(0,0,0,.22),
                inset 0 1px 0 rgba(255,255,255,.045);

            backdrop-filter:
                blur(18px);

            -webkit-backdrop-filter:
                blur(18px);

            animation:
                fadeUp .75s .18s both;

            z-index: 3;
        }

        .login-box::before {
            content: "";

            position: absolute;

            top: -1px;
            left: 28px;
            right: 28px;

            height: 1px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(52,211,153,.6),
                    transparent
                );

            opacity: .65;
        }

        .login-box::after {
            content: "";

            position: absolute;

            width: 80px;
            height: 80px;

            top: -40px;
            right: -40px;

            border-radius: 50%;

            background:
                radial-gradient(
                    circle,
                    rgba(16,185,129,.09),
                    transparent 70%
                );

            pointer-events: none;
        }

        /* =========================================================
           LOGIN HEADER
        ========================================================= */

        .login-top {
            margin-bottom: 30px;
        }

        .login-label {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            margin-bottom: 12px;

            color:
                var(--primary-light);

            font-size: 9px;

            font-weight: 850;

            letter-spacing: .18em;

            text-transform: uppercase;
        }

        .login-label::before {
            content: "";

            width: 6px;
            height: 6px;

            border-radius: 50%;

            background:
                var(--primary);

            box-shadow:
                0 0 12px
                rgba(16,185,129,.8);
        }

        .login-box h2 {
            font-size: 31px;

            line-height: 1.1;

            letter-spacing: -.05em;

            font-weight: 900;
        }

        .login-box .login-subtitle {
            margin-top: 10px;

            color:
                var(--muted);

            font-size: 12px;

            line-height: 1.65;
        }

        /* =========================================================
           ERROR
        ========================================================= */

        .error-box {
            display: flex;

            align-items: flex-start;

            gap: 10px;

            margin-bottom: 19px;

            padding:
                12px 13px;

            border:
                1px solid
                rgba(248,113,113,.18);

            background:
                rgba(248,113,113,.055);

            border-radius: 11px;

            color:
                #fca5a5;

            font-size: 11px;

            line-height: 1.5;

            animation:
                shake .35s ease;
        }

        @keyframes shake {
            20% {
                transform:
                    translateX(-5px);
            }

            40% {
                transform:
                    translateX(5px);
            }

            60% {
                transform:
                    translateX(-3px);
            }

            80% {
                transform:
                    translateX(3px);
            }
        }

        .error-icon {
            width: 18px;
            height: 18px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background:
                rgba(248,113,113,.13);

            flex-shrink: 0;

            font-weight: 800;
        }

        /* =========================================================
           FORM
        ========================================================= */

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;

            margin-bottom: 8px;

            color:
                var(--text-soft);

            font-size: 10px;

            font-weight: 750;

            letter-spacing: .02em;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper::after {
            content: "";

            position: absolute;

            left: 12px;
            right: 12px;

            bottom: -1px;

            height: 1px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    var(--primary),
                    transparent
                );

            transform:
                scaleX(0);

            transform-origin: center;

            transition:
                transform .3s ease;

            pointer-events: none;
        }

        .input-wrapper:focus-within::after {
            transform:
                scaleX(1);
        }

        .input-icon {
            position: absolute;

            left: 14px;
            top: 50%;

            transform:
                translateY(-50%);

            width: 17px;
            height: 17px;

            color:
                #5d8277;

            pointer-events: none;

            transition:
                color .2s ease,
                transform .2s ease;
        }

        .input-wrapper:focus-within .input-icon {
            color:
                var(--primary-light);

            transform:
                translateY(-50%)
                scale(1.08);
        }

        .form-input {
            width: 100%;

            height: 50px;

            padding:
                0 14px 0 43px;

            border:
                1px solid
                rgba(255,255,255,.08);

            border-radius: 12px;

            outline: none;

            background:
                rgba(255,255,255,.032);

            color:
                var(--text);

            font-size: 13px;

            transition:
                border-color .22s ease,
                background .22s ease,
                box-shadow .22s ease,
                transform .22s ease;
        }

        .form-input::placeholder {
            color:
                #496b61;
        }

        .form-input:hover {
            border-color:
                rgba(255,255,255,.12);

            background:
                rgba(255,255,255,.045);
        }

        .form-input:focus {
            border-color:
                rgba(52,211,153,.48);

            background:
                rgba(16,185,129,.035);

            box-shadow:
                0 0 0 4px
                rgba(16,185,129,.065),
                0 10px 25px
                rgba(0,0,0,.12);

            transform:
                translateY(-1px);
        }

        .password-input {
            padding-right: 45px;
        }

        /* =========================================================
           PASSWORD TOGGLE
        ========================================================= */

        .password-toggle {
            position: absolute;

            right: 8px;
            top: 50%;

            transform:
                translateY(-50%);

            width: 34px;
            height: 34px;

            border: none;

            background:
                transparent;

            color:
                #5d8277;

            border-radius: 8px;

            cursor: pointer;

            display: flex;

            align-items: center;
            justify-content: center;

            transition:
                color .2s ease,
                background .2s ease,
                transform .2s ease;
        }

        .password-toggle:hover {
            color:
                var(--primary-light);

            background:
                rgba(16,185,129,.08);

            transform:
                translateY(-50%)
                scale(1.06);
        }

        .password-toggle:active {
            transform:
                translateY(-50%)
                scale(.94);
        }

        /* =========================================================
           SUBMIT BUTTON
        ========================================================= */

        .submit-button {
            position: relative;

            width: 100%;

            height: 51px;

            margin-top: 7px;

            border: none;

            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #34d399 0%,
                    #10b981 45%,
                    #059669 100%
                );

            color:
                #022c22;

            font-size: 13px;

            font-weight: 850;

            cursor: pointer;

            overflow: hidden;

            box-shadow:
                0 14px 30px
                rgba(16,185,129,.18),
                inset 0 1px 0
                rgba(255,255,255,.25);

            transition:
                transform .2s ease,
                box-shadow .2s ease,
                filter .2s ease;
        }

        .submit-button::before {
            content: "";

            position: absolute;

            top: 0;
            left: -100%;

            width: 70%;
            height: 100%;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(255,255,255,.3),
                    transparent
                );

            transform:
                skewX(-20deg);

            transition:
                left .55s ease;
        }

        .submit-button::after {
            content: "";

            position: absolute;

            inset: 0;

            background:
                radial-gradient(
                    circle at
                    var(--button-x, 50%)
                    var(--button-y, 50%),
                    rgba(255,255,255,.25),
                    transparent 32%
                );

            opacity: 0;

            transition:
                opacity .25s ease;
        }

        .submit-button:hover {
            transform:
                translateY(-2px)
                scale(1.005);

            box-shadow:
                0 19px 42px
                rgba(16,185,129,.27),
                inset 0 1px 0
                rgba(255,255,255,.3);

            filter:
                brightness(1.05);
        }

        .submit-button:hover::before {
            left: 140%;
        }

        .submit-button:hover::after {
            opacity: 1;
        }

        .submit-button:active {
            transform:
                translateY(0)
                scale(.985);
        }

        .button-content {
            position: relative;

            z-index: 2;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 9px;
        }

        .button-arrow {
            font-size: 16px;

            transition:
                transform .2s ease;
        }

        .submit-button:hover .button-arrow {
            transform:
                translateX(4px);
        }

        .submit-button.loading {
            pointer-events: none;

            opacity: .75;
        }

        .submit-button.loading .button-text,
        .submit-button.loading .button-arrow {
            opacity: 0;
        }

        .loader {
            position: absolute;

            width: 18px;
            height: 18px;

            border:
                2px solid
                rgba(2,44,34,.25);

            border-top-color:
                #022c22;

            border-radius: 50%;

            animation:
                spin .7s linear infinite;

            opacity: 0;

            z-index: 3;
        }

        .submit-button.loading .loader {
            opacity: 1;
        }

        @keyframes spin {
            to {
                transform:
                    rotate(360deg);
            }
        }

        /* =========================================================
           STATUS
        ========================================================= */

        .system-status {
            display: flex;

            align-items: center;

            justify-content: center;

            gap: 8px;

            margin-top: 21px;

            color:
                #668a7e;

            font-size: 9px;

            font-weight: 650;

            letter-spacing: .01em;
        }

        .status-dot {
            width: 6px;
            height: 6px;

            border-radius: 50%;

            background:
                var(--primary);

            box-shadow:
                0 0 0 4px
                rgba(16,185,129,.07);

            animation:
                statusPulse 2s ease-in-out infinite;
        }

        /* =========================================================
           FOOTER
        ========================================================= */

        .login-footer {
            position: absolute;

            bottom: 22px;

            left: 0;
            right: 0;

            text-align: center;

            color:
                #3e6258;

            font-size: 9px;

            z-index: 4;
        }

        /* =========================================================
           RIPPLE
        ========================================================= */

        .ripple {
            position: absolute;

            width: 10px;
            height: 10px;

            border-radius: 50%;

            background:
                rgba(255,255,255,.35);

            transform:
                scale(0);

            animation:
                ripple .6s ease-out;

            pointer-events: none;

            z-index: 10;
        }

        @keyframes ripple {
            to {
                transform:
                    scale(35);

                opacity: 0;
            }
        }

        /* =========================================================
           RESPONSIVE
        ========================================================= */

        @media (max-width: 900px) {

            body {
                padding: 20px;
            }

            .login-shell {
                grid-template-columns: 1fr;

                max-width: 620px;

                min-height: auto;

                transform: none !important;
            }

            .intro {
                padding:
                    45px 45px 38px;

                border-right: none;

                border-bottom:
                    1px solid
                    rgba(255,255,255,.055);
            }

            .intro-content {
                margin-top: 45px;
            }

            .intro h1 {
                font-size: 53px;
            }

            .intro-footer {
                margin-top: 45px;
            }

            .login-panel {
                padding:
                    45px;
            }

            .login-footer {
                position: static;

                margin-top: 25px;
            }
        }

        @media (max-width: 560px) {

            body {
                padding: 10px;
            }

            .login-shell {
                border-radius: 21px;
            }

            .intro {
                padding:
                    32px 25px;
            }

            .brand-logo {
                width: 52px;
                height: 52px;
            }

            .brand-name strong {
                font-size: 19px;
            }

            .brand-name span {
                font-size: 9px;
            }

            .intro-content {
                margin-top: 40px;
            }

            .intro h1 {
                font-size: 43px;
            }

            .intro-description {
                font-size: 14px;
            }

            .features {
                grid-template-columns: 1fr;
            }

            .tagline-box {
                margin-top: 28px;
            }

            .login-panel {
                padding:
                    28px 20px 35px;
            }

            .login-box {
                padding:
                    24px 20px;
            }

            .login-box h2 {
                font-size: 28px;
            }

            .background-word {
                font-size: 100px;
            }
        }

        @media (max-width: 380px) {

            .intro h1 {
                font-size: 37px;
            }

            .brand-name strong {
                font-size: 17px;
            }

            .brand-name span {
                font-size: 8px;
            }

            .login-box {
                padding:
                    21px 17px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;

                animation-iteration-count: 1 !important;

                transition-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>

    <!-- =========================================================
         AMBIENT BACKGROUND
    ========================================================== -->

    <div class="ambient">
        <div class="ambient-orb orb-one"></div>
        <div class="ambient-orb orb-two"></div>
    </div>

    <div class="background-line"></div>

    <div class="background-word">
        BESOK
    </div>


    <!-- =========================================================
         MAIN
    ========================================================== -->

    <main class="login-shell" id="loginShell">

        <!-- =====================================================
             LEFT / BRAND
        ====================================================== -->

        <section class="intro">

            <div>

                <!-- BRAND -->

                <div class="brand">

                    <div class="brand-logo">

                        <svg
                            viewBox="0 0 100 100"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >

                            <defs>

                                <linearGradient
                                    id="logoGradient"
                                    x1="15"
                                    y1="12"
                                    x2="87"
                                    y2="90"
                                    gradientUnits="userSpaceOnUse"
                                >

                                    <stop
                                        stop-color="#34D399"
                                    />

                                    <stop
                                        offset="1"
                                        stop-color="#047857"
                                    />

                                </linearGradient>

                            </defs>


                            <!-- CROSS -->

                            <path
                                d="
                                    M36 8
                                    C29.4 8 24 13.4 24 20
                                    V36
                                    H20
                                    C13.4 36 8 41.4 8 48
                                    C8 54.6 13.4 60 20 60
                                    H24
                                    V80
                                    C24 86.6 29.4 92 36 92
                                    H48
                                    C54.6 92 60 86.6 60 80
                                    V60
                                    H76
                                    C82.6 60 88 54.6 88 48
                                    C88 41.4 82.6 36 76 36
                                    H60
                                    V20
                                    C60 13.4 54.6 8 48 8
                                    H36Z
                                "
                                fill="url(#logoGradient)"
                            />


                            <!-- LEAF -->

                            <path
                                d="
                                    M48 79
                                    C49 58 58 39 83 29
                                    C84 51 75 67 57 74
                                    C54 76 51 78 48 79Z
                                "
                                fill="#34D399"
                            />


                            <!-- LEAF DETAIL -->

                            <path
                                d="
                                    M51 68
                                    C59 56 67 48 77 42
                                "
                                stroke="#ECFDF5"
                                stroke-width="4"
                                stroke-linecap="round"
                            />

                        </svg>

                    </div>


                    <div class="brand-name">

                        <span>
                            APOTEK
                        </span>

                        <strong>
                            BESOK SEMBUH
                        </strong>

                    </div>

                </div>


                <!-- INTRO -->

                <div class="intro-content">

                    <div class="eyebrow">
                        SISTEM MANAJEMEN APOTEK
                    </div>


                    <h1>

                        Kelola apotek.

                        <span>
                            Lebih mudah.
                        </span>

                    </h1>


                    <p class="intro-description">

                        Atur obat, pantau stok,
                        proses transaksi, dan lihat
                        laporan dalam satu sistem
                        yang sederhana dan terintegrasi.

                    </p>


                    <!-- FEATURES -->

                    <div class="features">

                        <div class="feature">

                            <div class="feature-icon">
                                +
                            </div>

                            <span>
                                Manajemen Obat
                            </span>

                        </div>


                        <div class="feature">

                            <div class="feature-icon">
                                ◫
                            </div>

                            <span>
                                Kontrol Stok
                            </span>

                        </div>


                        <div class="feature">

                            <div class="feature-icon">
                                $
                            </div>

                            <span>
                                Kasir & POS
                            </span>

                        </div>


                        <div class="feature">

                            <div class="feature-icon">
                                ↗
                            </div>

                            <span>
                                Laporan
                            </span>

                        </div>

                    </div>


                    <!-- TAGLINE -->

                    <div class="tagline-box">

                        <div class="tagline-mark">

                            <span></span>
                            <span></span>
                            <span></span>

                        </div>


                        <p>

                            Kalau belum sembuh hari ini,

                            <strong>
                                tenang... masih ada besok.
                            </strong>

                        </p>

                    </div>

                </div>

            </div>


            <!-- FOOTER -->

            <div class="intro-footer">

                <span class="footer-dot"></span>

                <span>
                    Sistem manajemen apotek
                </span>

            </div>

        </section>


        <!-- =====================================================
             RIGHT / LOGIN
        ====================================================== -->

        <section class="login-panel">

            <div class="login-box">

                <div class="login-top">

                    <span class="login-label">
                        Secure Access
                    </span>

                    <h2>
                        Masuk ke Sistem
                    </h2>

                    <p class="login-subtitle">
                        Silakan masukkan akun Anda
                        untuk melanjutkan.
                    </p>

                </div>


                <!-- ERROR -->

                @if ($errors->any())

                    <div class="error-box">

                        <div class="error-icon">
                            !
                        </div>

                        <div>
                            {{ $errors->first() }}
                        </div>

                    </div>

                @endif


                <!-- FORM -->

                <form
                    action="/login"
                    method="POST"
                    id="loginForm"
                >

                    @csrf


                    <!-- EMAIL -->

                    <div class="form-group">

                        <label
                            for="email"
                            class="form-label"
                        >
                            Email
                        </label>


                        <div class="input-wrapper">

                            <svg
                                class="input-icon"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >

                                <rect
                                    x="3"
                                    y="5"
                                    width="18"
                                    height="14"
                                    rx="2"
                                />

                                <path
                                    d="m3 7 9 6 9-6"
                                />

                            </svg>


                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-input"
                                value="{{ old('email') }}"
                                placeholder="nama@email.com"
                                autocomplete="email"
                                required
                                autofocus
                            >

                        </div>

                    </div>


                    <!-- PASSWORD -->

                    <div class="form-group">

                        <label
                            for="password"
                            class="form-label"
                        >
                            Password
                        </label>


                        <div class="input-wrapper">

                            <svg
                                class="input-icon"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >

                                <rect
                                    x="4"
                                    y="10"
                                    width="16"
                                    height="11"
                                    rx="2"
                                />

                                <path
                                    d="M8 10V7a4 4 0 0 1 8 0v3"
                                />

                            </svg>


                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-input password-input"
                                placeholder="Masukkan password"
                                autocomplete="current-password"
                                required
                            >


                            <button
                                type="button"
                                class="password-toggle"
                                id="passwordToggle"
                                aria-label="Tampilkan password"
                            >

                                <svg
                                    id="eyeOpen"
                                    width="17"
                                    height="17"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >

                                    <path
                                        d="
                                            M2 12s3.5-7 10-7
                                            10 7 10 7-3.5 7-10 7
                                            S2 12 2 12Z
                                        "
                                    />

                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="3"
                                    />

                                </svg>


                                <svg
                                    id="eyeClosed"
                                    width="17"
                                    height="17"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                    style="display:none;"
                                >

                                    <path
                                        d="
                                            M3 3l18 18

                                            M10.6 10.6
                                            a2 2 0 0 0 2.8 2.8

                                            M9.9 5.2
                                            A10.7 10.7 0 0 1 12 5

                                            c6.5 0 10 7 10 7

                                            a18.2 18.2 0 0 1-3.1 3.8

                                            M6.1 6.1
                                            C3.4 8 2 12 2 12

                                            s3.5 7 10 7

                                            c1.4 0 2.7-.3 3.9-.8
                                        "
                                    />

                                </svg>

                            </button>

                        </div>

                    </div>


                    <!-- BUTTON -->

                    <button
                        type="submit"
                        class="submit-button"
                        id="loginButton"
                    >

                        <span class="button-content">

                            <span class="button-text">
                                Masuk ke Sistem
                            </span>

                            <span class="button-arrow">
                                →
                            </span>

                        </span>


                        <span class="loader"></span>

                    </button>

                </form>


                <!-- STATUS -->

                <div class="system-status">

                    <span class="status-dot"></span>

                    Sistem siap digunakan

                </div>

            </div>


            <!-- FOOTER -->

            <div class="login-footer">

                Apotek Besok Sembuh
                © {{ date('Y') }}

            </div>

        </section>

    </main>


    <script>

        /* =========================================================
           ELEMENTS
        ========================================================== */

        const root =
            document.documentElement;

        const shell =
            document.getElementById(
                'loginShell'
            );

        const loginForm =
            document.getElementById(
                'loginForm'
            );

        const loginButton =
            document.getElementById(
                'loginButton'
            );

        const password =
            document.getElementById(
                'password'
            );

        const passwordToggle =
            document.getElementById(
                'passwordToggle'
            );

        const eyeOpen =
            document.getElementById(
                'eyeOpen'
            );

        const eyeClosed =
            document.getElementById(
                'eyeClosed'
            );


        /* =========================================================
           CURSOR GLOW + 3D CARD
        ========================================================== */

        let mouseX = 50;
        let mouseY = 50;

        document.addEventListener(
            'mousemove',
            function (event) {

                mouseX =
                    (event.clientX /
                        window.innerWidth) *
                    100;

                mouseY =
                    (event.clientY /
                        window.innerHeight) *
                    100;

                root.style.setProperty(
                    '--mouse-x',
                    mouseX + '%'
                );

                root.style.setProperty(
                    '--mouse-y',
                    mouseY + '%'
                );


                if (
                    window.innerWidth <= 900
                ) {
                    return;
                }


                const rect =
                    shell.getBoundingClientRect();

                const x =
                    event.clientX -
                    (
                        rect.left +
                        rect.width / 2
                    );

                const y =
                    event.clientY -
                    (
                        rect.top +
                        rect.height / 2
                    );

                const rotateY =
                    (x / rect.width) *
                    2.2;

                const rotateX =
                    -(y / rect.height) *
                    2.2;


                root.style.setProperty(
                    '--tilt-x',
                    rotateX + 'deg'
                );

                root.style.setProperty(
                    '--tilt-y',
                    rotateY + 'deg'
                );

            }
        );


        document.addEventListener(
            'mouseleave',
            function () {

                root.style.setProperty(
                    '--tilt-x',
                    '0deg'
                );

                root.style.setProperty(
                    '--tilt-y',
                    '0deg'
                );

            }
        );


        /* =========================================================
           FEATURE CURSOR
        ========================================================== */

        document
            .querySelectorAll('.feature')
            .forEach(function (feature) {

                feature.addEventListener(
                    'mousemove',
                    function (event) {

                        const rect =
                            feature.getBoundingClientRect();

                        const x =
                            event.clientX -
                            rect.left;

                        const y =
                            event.clientY -
                            rect.top;

                        feature.style.setProperty(
                            '--feature-x',
                            x + 'px'
                        );

                        feature.style.setProperty(
                            '--feature-y',
                            y + 'px'
                        );

                    }
                );

            });


        /* =========================================================
           BUTTON CURSOR
        ========================================================== */

        loginButton.addEventListener(
            'mousemove',
            function (event) {

                const rect =
                    loginButton.getBoundingClientRect();

                const x =
                    (
                        (event.clientX - rect.left) /
                        rect.width
                    ) *
                    100;

                const y =
                    (
                        (event.clientY - rect.top) /
                        rect.height
                    ) *
                    100;


                loginButton.style.setProperty(
                    '--button-x',
                    x + '%'
                );

                loginButton.style.setProperty(
                    '--button-y',
                    y + '%'
                );

            }
        );


        /* =========================================================
           MAGNETIC BUTTON
        ========================================================== */

        loginButton.addEventListener(
            'mousemove',
            function (event) {

                if (
                    loginButton.classList.contains(
                        'loading'
                    )
                ) {
                    return;
                }


                const rect =
                    loginButton.getBoundingClientRect();

                const x =
                    event.clientX -
                    (
                        rect.left +
                        rect.width / 2
                    );

                const y =
                    event.clientY -
                    (
                        rect.top +
                        rect.height / 2
                    );


                const moveX =
                    x * 0.08;

                const moveY =
                    y * 0.08;


                loginButton.style.transform =
                    `translate(${moveX}px, ${moveY - 2}px) scale(1.005)`;

            }
        );


        loginButton.addEventListener(
            'mouseleave',
            function () {

                if (
                    !loginButton.classList.contains(
                        'loading'
                    )
                ) {

                    loginButton.style.transform =
                        '';

                }

            }
        );


        /* =========================================================
           PASSWORD TOGGLE
        ========================================================== */

        passwordToggle.addEventListener(
            'click',
            function () {

                const isPassword =
                    password.type === 'password';


                password.type =
                    isPassword
                        ? 'text'
                        : 'password';


                eyeOpen.style.display =
                    isPassword
                        ? 'none'
                        : 'block';


                eyeClosed.style.display =
                    isPassword
                        ? 'block'
                        : 'none';


                passwordToggle.setAttribute(
                    'aria-label',
                    isPassword
                        ? 'Sembunyikan password'
                        : 'Tampilkan password'
                );

            }
        );


        /* =========================================================
           LOGIN LOADING
        ========================================================== */

        loginForm.addEventListener(
            'submit',
            function () {

                loginButton.classList.add(
                    'loading'
                );

                loginButton.style.transform =
                    '';

            }
        );


        /* =========================================================
           BUTTON RIPPLE
        ========================================================== */

        loginButton.addEventListener(
            'click',
            function (event) {

                const rect =
                    loginButton.getBoundingClientRect();


                const ripple =
                    document.createElement(
                        'span'
                    );


                ripple.className =
                    'ripple';


                ripple.style.left =
                    (
                        event.clientX -
                        rect.left
                    ) +
                    'px';


                ripple.style.top =
                    (
                        event.clientY -
                        rect.top
                    ) +
                    'px';


                loginButton.appendChild(
                    ripple
                );


                setTimeout(
                    function () {
                        ripple.remove();
                    },
                    650
                );

            }
        );


        /* =========================================================
           KEYBOARD FEEDBACK
        ========================================================== */

        document.addEventListener(
            'keydown',
            function (event) {

                if (
                    event.key === 'Enter' &&
                    document.activeElement.tagName ===
                    'INPUT'
                ) {

                    loginButton.style.filter =
                        'brightness(1.12)';


                    setTimeout(
                        function () {

                            loginButton.style.filter =
                                '';

                        },
                        150
                    );

                }

            }
        );

    </script>

</body>

</html>

