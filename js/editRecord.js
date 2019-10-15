// function edit(el) {
//     recordId = el.parentElement.parentElement.parentElement.id;
// }

//show data in Modal 
function showDataInModal(response) {
    let recordIdInput = document.getElementById("recordId") //input

     recordIdInput.value = response.id
     console.log(response)
     
}

//open modal 
function showModal(recordId) {
    let elem = document.getElementById('modal1');
    let instance = M.Modal.getInstance(elem);

    getData(recordId)

    instance.open();

}


function getData(id){
    var url = `./php/getData.php?id=${id}`;
    fetch(url)
    .then(function (response) {
      return response.json();
    })
    .then(function (body) {
       showDataInModal(body)
    });
}
