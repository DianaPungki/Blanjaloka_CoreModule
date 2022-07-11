var semiBar = new ProgressBar.SemiCircle("#semi-container", {
    color: "#1E891E",
    strokeWidth: 15,
    trailWidth: 15,
    trailColor: "#C2C2C2",
    easing: "bounce",
    from: { color: "#1E891E", width: 15 },
    to: { color: "#1E891E", width: 15 },
    text: {
      value: '0',
      className: 'progress-text',
      style: {
        color: 'black',
        position: 'absolute',
        top: '45%',
        left: '50%',
        padding: 0,
        margin: 0,
        transform: null
      }
    },
    step: (state, shape) => {
      shape.path.setAttribute("stroke", state.color);
      shape.path.setAttribute("stroke-width", state.width);
      shape.setText(Math.round(shape.value() * 100) + ' %' + "<br>Pesanan Berhasil");
    }
  });
  
  semiBar.animate(0.98, {
    duration: 2000
  });