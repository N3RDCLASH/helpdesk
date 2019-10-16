// function edit(el) {
//     recordId = el.parentElement.parentElement.parentElement.id;


//show data in Modal 


function showDataInModal(response) {
    let recordNaamInput = document.getElementById("naam") //input
    let recordAfdelingInput = document.getElementById("afdeling") //input
    let recordDatum_UitgaveInput = document.getElementById("datum_uitgave") //input
    let recordDatum_TerugInput = document.getElementById("datum_terug") //input
    let recordGewenste_ApparaatInput = document.getElementById("gewenste_apparaat") //input
    let recordBijzonderInput = document.getElementById("bijzonderheden") //input
    let recordGetest_DoorInput = document.getElementById("getest_door") //input
    let recordDatum_TestInput = document.getElementById("datum_test") //input
    
    
    recordNaamInput.value = response.naam
    recordAfdelingInput.value = response.afdeling
    recordDatum_UitgaveInput.value = response.datum_uitgave
    recordDatum_TerugInput.value = response.datum_terug
    recordGewenste_ApparaatInput.value = response.gewenste_apparaat
    recordBijzonderInput.value = response.bijzonderheden
    recordGetest_DoorInput.value = response.getest_door
    recordDatum_TestInput.value = response.datum_test

     
     
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
        console.log(body)
       showDataInModal(body)
    });
}

function updateRecord(id){
    form = document.getElementById('form');   
    const formData = new FormData(form);

    var url = `./php/updateRecord.php?id=${id}`;
    console.log(url)
    fetch(url,{
        method:"post",
        body: formData
    })
    .then(function (response) {
      console.log( response.json)

    }).catch(function(error){
        console.error(error)
    })
}
