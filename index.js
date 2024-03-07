const canvas = new fabric.Canvas("canvas", { isDrawingMode: false });

canvas.setBackgroundImage(
  "./image/img_tree.png",
  canvas.renderAll.bind(canvas)
);

canvas.freeDrawingBrush.color = "red";
canvas.freeDrawingBrush.width = 2;

$("#draw").on("click", function () {
  canvas.isDrawingMode = !canvas.isDrawingMode;
});

$("#remove").on("click", function () {
  canvas.isDrawingMode = false;
  canvas.remove(canvas.getActiveObject());
});

$("#tosvg").on("click", function () {
  //  $("#svg").html("<h1>SVG:</h1><br>" + canvas.toSVG());
  const link = canvas.toDataURL("image/png");
  $("#saveImage").val(link);
  $("#submitForm").submit();
  console.log(link);
});
