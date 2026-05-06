function chonTour(tenTour, idCard) {
    document.getElementById("thongBao").innerText = "Bạn đã chọn " + tenTour;

    let cacTheTour = document.getElementsByClassName("tour-card");

    for (let i = 0; i < cacTheTour.length; i++) {
        cacTheTour[i].style.backgroundColor = "white";
    }

    document.getElementById(idCard).style.backgroundColor = "#ffffe0";
}