function updateImg(id){
    var name_product1 = document.getElementById('name_product1');
    var name_product2 = document.getElementById('name_product1');
    var name_product3 = document.getElementById('name_product1');
    var name_product4 = document.getElementById('name_product1');
    var li1 = document.getElementById('cc1');
    var li2 = document.getElementById('cc2');
    var li3 = document.getElementById('cc3');
    var price1 = document.getElementById('price1')
    var price2 = document.getElementById('price1')
    var price3 = document.getElementById('price1')
    var price4 = document.getElementById('price1')
    var src1 = "/fashionconnect/assets/frontend/img/phong1.jpg"
    var src2 = "/fashionconnect/assets/frontend/img/hoodle3.jpg"
    var src3 = "/fashionconnect/assets/frontend/img/sweeter1.jpg"
    var src4 = "/fashionconnect/assets/frontend/img/somi3.jpg" 
    const srcMain = document.querySelector('.img_main')
    if (!srcMain) {
        alert("Phần tử mainImage không tồn tại trong DOM");
        return;
    }
    if(id == "img1"){
        document.querySelector('.img1').src=srcMain.src
        srcMain.src = src1
        li1.innerHTML = "Áo phông"
        li2.innerHTML = "logo"
        name_product1.innerHTML ="Áo phông, Merry christams ya filthy *animal*";
        price1.innerHTML = "28.5$"
    }
    else if(id == "img2"){
        document.querySelector('.img2').src=srcMain.src
        srcMain.src = src2
        li1.innerHTML = "Hoodle"
        li2.innerHTML = "logo"
        name_product2.innerHTML ="Hoodle, WWE, Tông mầu đen xám, BRAY WYATT";
        price2.innerHTML = "30.5$"
    }
    else if(id == "img3"){
        document.querySelector('.img3').src=srcMain.src
        srcMain.src = src3
        li1.innerHTML = "Sweeter"
        li2.innerHTML = "logo"
        name_product3.innerHTML ="SWEETER,Merry christams,Believe ";
        price3.innerHTML = "27.7$"
    }

    else if(id == "img4"){
        document.querySelector('.img4').src=srcMain.src
        srcMain.src = src4
        li1.innerHTML = "Sơ Mi"
        li2.innerHTML = "Caro"
        name_product4.innerHTML ="Áo Sơ Mi kẻ sọc xanh dương ADLV"
        price4.innerHTML = "26.9$"
    }
}
