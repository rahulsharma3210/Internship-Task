
function splitNumbers() {
    // Get user inputs
    const inputNumber = parseInt(document.getElementById('inputNumber').value);
    const inputSplit = parseInt(document.getElementById('inputSplit').value);

    // Clear existing divs
    document.getElementById('output-container').innerHTML = '';

    // Calculate split value
    const splitValue = Math.floor(inputNumber / inputSplit);

    // Generate divs based on splits
    for (let i = 0; i < inputSplit; i++) {
      const div = document.createElement('div');
      div.className = 'split-div';
      div.style.width = `${splitValue * 20}px`; // Adjust width based on split value
      div.style.backgroundColor = getRandomColor();
      div.textContent = splitValue;
      document.getElementById('output-container').appendChild(div);
    }
  }

  function getRandomColor() {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }

  






//   function splitNumbers() {
//     // Get user inputs
//     const inputNumber = parseInt(document.getElementById('inputNumber').value);
//     const inputSplit = parseInt(document.getElementById('inputSplit').value);

//     // Clear existing divs
//     document.getElementById('output-container').innerHTML = '';

//     // Calculate split value
//     const splitValue = Math.floor(inputNumber / inputSplit);

//     // Generate divs based on splits
//     for (let i = 0; i < inputSplit; i++) {
//       const div = document.createElement('div');
//       div.className = 'split-div';
//       div.style.width = `${splitValue * 20}px`; // Adjust width based on split value
//       div.style.backgroundColor = getRandomColor();
//       div.textContent = splitValue;
//       document.getElementById('output-container').appendChild(div);
//     }
//   }


//   // Function to generate random color
//   function getRandomColor() {
//     const letters = '0123456789ABCDEF';
//     let color = '#';
//     for (let i = 0; i < 6; i++) {
//       color += letters[Math.floor(Math.random() * 16)];
//     }
//     return color;
//   }



// return result;