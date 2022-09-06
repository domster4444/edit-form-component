for (let i = 0; i < document.getElementsByClassName("file-upload").length; i++) {
  console.log("found node elements =", document.getElementsByClassName("file-upload")[i]);

  document.getElementsByClassName("file-upload")[i].addEventListener("change", function (e) {
    console.log(e.target.files[0].name);

    document.getElementsByClassName("file-preview")[
      i
    ].innerHTML = ` <p id='upload-success-msg' class='one-liner' style="color: #0f5288">${e.target.files[0].name}</p>`;
  });
}
