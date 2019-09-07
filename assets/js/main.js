let isSizeOfLaptop = true;

const checkHeight = new Promise((resolve, reject) => {
  if (isSizeOfLaptop) {
    const heigh = window.screen.height;

    resolve(heigh);
  } else {
    const reason = new Error("we didnt get the size of the screen");
  }
});

const toggle = () => {
  checkHeight.then(function(heigh) {
    if (heigh > 768) {
      console.log(heigh);

      document.getElementById("message").setAttribute("rows", 12);
    } else {
      console.log(heigh);
      document.getElementById("message").setAttribute("rows", 0);
    }
  });
};

toggle();
