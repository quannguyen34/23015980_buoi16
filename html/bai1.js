function doiNoiDung(tour) {
    let doanVan = document.getElementById("noiDungTour");

    if (tour === 'dalat') {
        doanVan.innerText = "Tour Đà Lạt 3 ngày 2 đêm, phù hợp cho du khách yêu thích khí hậu mát mẻ.";
    } else if (tour === 'phuquoc') {
        doanVan.innerText = "Tour Phú Quốc nghỉ dưỡng biển đảo, phù hợp cho gia đình và nhóm bạn.";
    } else if (tour === 'hanoi') {
        doanVan.innerText = "Tour Hà Nội city tour, tham quan phố cổ, Hồ Gươm và các di tích lịch sử.";
    }
}