

function splitNumbers() {
  // Get user inputs
  const inputNumber = parseInt(document.getElementById("inputNumber").value);
  const inputSplit = parseInt(document.getElementById("inputSplit").value);

  if (inputNumber <= 0 || inputSplit <= 0 || inputNumber<inputSplit) {
      document.getElementById("output-container").innerHTML = "<div class='split-div' style='color: red; font-size:30px;'>Please enter a valid input.</div>";
      return;
  }

  // Clear existing divs
  document.getElementById("output-container").innerHTML = "";

  // Calculate split value
  const splitValue = Math.ceil(inputNumber / inputSplit);

  // Generate divs based on splits
  for (let i = 0; i < inputSplit - 1; i++) {
      const div = document.createElement("div");
      div.className = "split-div";
      div.style.width = `${splitValue * 20}px`; // Adjust width based on split value
      div.style.backgroundColor = getRandomColor();
      div.textContent = splitValue;
      document.getElementById("output-container").appendChild(div);
  }

  // Handle the remaining part (remainder) when inputNumber is not perfectly divisible by inputSplit
  const remainder = inputNumber % inputSplit;
  const div = document.createElement("div");
  div.className = "split-div";
  div.style.width = `${remainder * 20}px`; // Adjust width based on remainder
  div.style.backgroundColor = getRandomColor();
  div.textContent = remainder;
  document.getElementById("output-container").appendChild(div);
}

function getRandomColor() {
  const letters = "0123456789ABCDEF";
  let color = "#";
  for (let i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}







// function splitNumbers() {
//   // Get user inputs
//   const inputNumber = parseFloat(document.getElementById("inputNumber").value);
//   const inputSplit = parseInt(document.getElementById("inputSplit").value);

//   // Validate inputs
//   if (isNaN(inputNumber) || isNaN(inputSplit) || inputNumber < 0 || inputSplit <= 0 || inputNumber < inputSplit) {
//     document.getElementById("output-container").innerHTML = "<div class='split-div' style='color: red; font-size:30px;'>Please enter a valid input.</div>";
//     return;
//   }

//   // Check if inputNumber is divisible by inputSplit
//   if (inputNumber % inputSplit !== 0) {
//     document.getElementById("output-container").innerHTML = "<div class='split-div' style='color: red; font-size:30px;'>Cannot split evenly. Please enter valid inputs.</div>";
//     return;
//   }

//   // Clear existing divs
//   document.getElementById("output-container").innerHTML = "";

//   // Calculate split value
//   const splitValue = inputNumber / inputSplit;

//   // Generate divs based on splits
//   for (let i = 0; i < inputSplit; i++) {
//     const div = document.createElement("div");
//     div.className = "split-div";
//     div.style.width = `${splitValue * 20}px`; // Adjust width based on split value
//     div.style.backgroundColor = getRandomColor();
//     div.textContent = splitValue;
//     document.getElementById("output-container").appendChild(div);
//   }
// }

// function getRandomColor() {
//   const letters = "0123456789ABCDEF";
//   let color = "#";
//   for (let i = 0; i < 6; i++) {
//     color += letters[Math.floor(Math.random() * 16)];
//   }
//   return color;
// }