// 連動プルダウン

window.onload = function() {

  nega = document.getElementById("nega1");

  category = document.getElementById("category1");

  category.onchange = changeCategory;

}

function changeCategory() {

  var changedCategory = category1.value;

   if (changedCategory == "0") {

    nega.textContent = null;
    var op = document.createElement("option")
    op.text = "選択してください";
    nega1.appendChild(op);


  } else if (changedCategory == "【サービス】") {

    setService();


  } else if (changedCategory == "【料金】") {


    setFee();

  } else if (changedCategory == "【時期】") {


    setSeason();

  } else {

    setPerson();
  }

}


function setService() {


  nega1.textContent = null;


  var service = [

    {cd:"", label:"選択して下さい"},

    {cd:"周囲に知っている人がいない", label:"周囲に知っている人がいない"},

    {cd:"検索しても出てこない", label:"検索しても出てこない"},

    {cd:"掲載数が少ない", label:"掲載数が少ない"}

  ];

  service.forEach(function(value) {

    var op = document.createElement("option");

    op.value = value.cd;

    op.text = value.label;

    nega1.appendChild(op);

  });

}


function setFee() {


  nega1.textContent = null;


  var fee = [

    {cd:"", label:"選択して下さい"},

    {cd:"月額はリスクがある", label:"月額はリスクがある"},

    {cd:"初期費用が高い", label:"初期費用が高い"},

    {cd:"1年契約がリスク", label:"1年契約がリスク"}

  ];

  fee.forEach(function(value) {

    var op = document.createElement("option");

    op.value = value.cd;

    op.text = value.label;

    nega1.appendChild(op);

  });

}


function setSeason() {


  nega1.textContent = null;


  var season = [

    {cd:"", label:"選択して下さい"},

    {cd:"メニューがまだ固まってない", label:"メニューがまだ固まってない"},

    {cd:"急いでいない", label:"急いでいない"},

    {cd:"スタッフが足りない", label:"スタッフが足りない"}

  ];

  season.forEach(function(value) {

    var op = document.createElement("option");

    op.value = value.cd;

    op.text = value.label;

    nega1.appendChild(op);

  });


}
    function setPerson() {
  
      nega1.textContent = null;
  
      var person = [
        {cd:"",label:"選択してください"},
        {cd:"営業の言うことが信用出来ない",label:"営業の言うことが信用出来ない"},
        {cd:"前に騙された事がある",label:"前に騙された事がある"}
      ];
  
      person.forEach(function(value){
  
        var op = document.createElement("option");
  
        op.value = value.cd;
        op.text = value.label;
  
        nega1.appendChild(op);
  
      });
  
    }
