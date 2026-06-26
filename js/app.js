document.querySelector("form").addEventListener("submit",function(e){
    e.preventDefault();

    let title = document.querySelector("input").value;

    if(title.length<3){
        alert("Title must be at least 3 charachters!!");
        return;
    }
    if(title === ""){
        alert("This field can't be empty!!")
        return;
    }

    alert("Task added succesfuly");
});