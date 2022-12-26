function FillForm(item) {
  if (item) {
    var txbTitle = document.getElementById("txbTitle");
    var txbDescription = document.getElementById("txbDescription");
    var txbUrl = document.getElementById("txbUrl");
    var txbPrice = document.getElementById("txbPrice");
    if (txbTitle) txbTitle.value = item.title;
    if (txbDescription) txbDescription.value = item.description;
    if (txbUrl) txbUrl.value = item.imageUrl;
    if (txbPrice) txbPrice.value = item.price;
  }
}

function GetDB() {
  var hfDB = document.getElementById("hfDB");
  if (hfDB) {
    var valueStr = hfDB.getAttribute("value");
    return JSON.parse(valueStr);
  }
  return undefined;
}

function SetDB(dbObj) {
  var hfDB = document.getElementById("hfDB");
  if (hfDB) hfDB.setAttribute("value", JSON.stringify(dbObj));
}

function SetId(valueStr) {
  var hfID = document.getElementById("hfID");
  if (hfID) hfID.setAttribute("value", valueStr);
}

function GetId() {
  var hfID = document.getElementById("hfID");
  if (hfID) {
    var valueStr = hfID.getAttribute("value");
    if (!isNaN(valueStr)) return parseInt(valueStr);
  }
  return -1;
}

function Save() {
  var txbTitle = document.getElementById("txbTitle");
  var txbDescription = document.getElementById("txbDescription");
  var txbUrl = document.getElementById("txbUrl");
  var txbPrice = document.getElementById("txbPrice");
  if (txbTitle && txbDescription && txbUrl && txbPrice) {
    var newItem = new Sneaker(
      this.GetId(),
      txbTitle.value,
      txbDescription.value,
      txbUrl.value,
      txbPrice.value
    );
    // var hfObject = document.getElementById("hfObject");
    // if (hfObject) hfObject.value = JSON.stringify(newItem);
    // else {
    //   console.error("Не найдены элементы управления!");
    // }
    var db = new DB();
    db.items = GetDB().items;
    db.Add(newItem);
    SetDB(db);
  }
  document.getElementById("newItemForm").submit();
}

function Delete() {
  var id = this.GetId();
  var db = new DB();
  db.items = GetDB().items;
  db.Delete(id);
  SetDB(db);
}

window.onload = function () {
  fetch("./data.json")
    .then((response) => response.json())
    .then((json) => {
      var db = new DB();
      db.items = json.items;
      FillForm(db.Get(GetId()));
      SetDB(db);
    });
};
