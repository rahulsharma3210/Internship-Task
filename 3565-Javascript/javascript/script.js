function splitNumbers() {
  // Get user inputs
  const inputNumber = parseInt(document.getElementById("inputNumber").value);
  const inputSplit = parseInt(document.getElementById("inputSplit").value);

  // Clear existing divs
  document.getElementById("output-container").innerHTML = "";

  // Calculate split value
  const splitValue = Math.floor(inputNumber / inputSplit);

  // Generate divs based on splits
  for (let i = 0; i < inputSplit; i++) {
    const div = document.createElement("div");
    div.className = "split-div";
    div.style.width = `${splitValue * 20}px`; // Adjust width based on split value
    div.style.backgroundColor = getRandomColor();
    div.textContent = splitValue;
    document.getElementById("output-container").appendChild(div);
  }
}

function getRandomColor() {
  const letters = "0123456789ABCDEF";
  let color = "#";
  for (let i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}



//new javascript-->


// document.getElementById('enterNumber').addEventListener('input', updateResult);
//         document.getElementById('splitNumber').addEventListener('input', updateResult);

//         function updateResult() {
//             const enterNumber = parseInt(document.getElementById('enterNumber').value) || 0;
//             const splitNumber = parseInt(document.getElementById('splitNumber').value) || 1;

//             const quotient = Math.floor(enterNumber / splitNumber);
//             const remainder = enterNumber % splitNumber;

//             const resultDiv = document.getElementById('result');
//             resultDiv.innerHTML = `<p>Quotient: ${quotient}</p>`;

//             // If there is a remainder, add it to the very left div
//             if (remainder > 0) {
//                 const leftDiv = document.querySelector('.col-md-3');
//                 leftDiv.innerHTML = `<h4>Left Div (with remainder)</h4><p>${remainder}</p>`;
//             } else {
//                 // Clear the content if there is no remainder
//                 const leftDiv = document.querySelector('.col-md-3');
//                 leftDiv.innerHTML = '';
//             }
//         }