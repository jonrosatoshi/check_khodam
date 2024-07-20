
console.log("js aktif");

function previewImage() {
  var preview = document.querySelector("#imagePreview");
  var file = document.querySelector("input[type=file]").files[0];
  var reader = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
    preview.style.display = "block";
  };

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
    preview.style.display = null;
  }
}


function captureAndGuide(elementId) {
  html2canvas(document.getElementById(elementId)).then(canvas => {
      const dataUrl = canvas.toDataURL('image/png');

      // Create a temporary link element
      const link = document.createElement('a');
      link.href = dataUrl;
      link.download = 'screenshot.png';
      link.click();

      // Show instructions
      alert('Screenshot saved! Please open Instagram and upload the screenshot to your Story.');
  });
}
