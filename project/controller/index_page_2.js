// getBoatSeat
const getBoatSeat = (boatNumber, date, orgin, destination) => {
    if (orgin == destination) {
        alert('ต้นทาง และ ปลายทาง เหมือนกัน !!')
        return;
    }
    //make Empty array Boat seat
    listSeat = [];
    listSeatNumber = [];
    getListSeat();

    document.getElementById('container-boatSeat-customerData').style.display = "block";
    getBottomBoatSeatData(boatNumber, date);
    getTopBoatSeatData(boatNumber, date);
}