const addBtn = document.querySelector("#addBtn");
const taskInput = document.querySelector("#task");
const tasksList = document.querySelector("#tasks");
const doneList = document.querySelector("#done");
const saveBtn = document.querySelector("#saveBtn");

// Ajoute une tache des qu'il click sur le bouton
addBtn.addEventListener("click", function(event) {
  event.preventDefault();
  const task = taskInput.value;
  const li = document.createElement("li");
  const text = document.createTextNode(task);
  // ajoute le texte dans la  li
  li.appendChild(text);

  const checkbox = document.createElement("input");
  // add un checkbox dans l li
  checkbox.type = "checkbox";
  li.appendChild(checkbox);

  const deleteBtn = document.createElement("button");
  // ajoute un bouton delete dans li
  deleteBtn.innerHTML = "Delete";
  deleteBtn.className = "btn btn-danger btn-sm delete";
  li.appendChild(deleteBtn);

  tasksList.appendChild(li);

  // add la tache dans la list des done task
  checkbox.addEventListener("change", function() {
    // si le checkbox est checked alors ajoute la tache dans la list des done task
    if (this.checked) {
      doneList.appendChild(li);
    } else {
        // sinon ajoute la tache dans la list des task
      tasksList.appendChild(li);
    }
  });

  deleteBtn.addEventListener("click", function() {
    li.remove();    
  });
  // vide le input a chaque click sur le bouton
  taskInput.value = "";
});



