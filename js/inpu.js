function displayImagePreview(event) {
    const input = event.target;
    const preview = document.getElementById('imagePreview');
   
    const file = input.files[0];
    if (file) {
      const reader = new FileReader();

      reader.onload = function (e) {
        preview.src = e.target.result;
      };

      reader.readAsDataURL(file);
    }
  }

  const imageContainer = document.querySelector('.image-container');
  const fileInput = document.getElementById('fileInput');

  imageContainer.addEventListener('click', function () {
    fileInput.click();
  });