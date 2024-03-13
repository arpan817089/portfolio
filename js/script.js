var cursor = document.querySelector (".movable_point_cursor");

// Cursor Making

document.addEventListener("mousemove", function (pointer) {
    cursor.style.left = pointer.x + "px";
    cursor.style.top = pointer.y + "px";
})


  
