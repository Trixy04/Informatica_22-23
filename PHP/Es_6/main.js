function avviaGioco() {
    document.getElementById('bottone').style.display = 'none';
    document.getElementById('table').style.display = '';
}

function cellaUno() {
    document.getElementById('table-scelta').style.display = '';
    document.getElementById('table-scelta').style.marginLeft = '38vh';
}

function cellaDue() {
    document.getElementById('table-scelta').style.display = '';
    document.getElementById('table-scelta').style.marginLeft = '43vh';
}

function cellaTre() {
    document.getElementById('table-scelta').style.display = '';
    document.getElementById('table-scelta').style.marginLeft = '48vh';
}

function cellaQuattro() {
    document.getElementById('table-scelta').style.display = '';
    document.getElementById('table-scelta').style.marginLeft = '52vh';
}

function controllaMargin() {
    if (document.getElementById('table-scelta').style.marginLeft == '38vh') {
        return 1;
    } else if (document.getElementById('table-scelta').style.marginLeft == '43vh') {
        return 2;
    } else if (document.getElementById('table-scelta').style.marginLeft == '48vh') {
        return 3;
    } else {
        return 4;
    }
}

function nascondiTabella() {
    document.getElementById('table-scelta').style.display = 'none';
}

function clickRosso() {

    if (controllaMargin() == 1) {
        document.getElementById('inter1').style.display = 'none';
        document.getElementById('giallo1').style.display = 'none';
        document.getElementById('verde1').style.display = 'none';
        document.getElementById('blu1').style.display = 'none';
        document.getElementById('rosso1').style.display = '';
        nascondiTabella();
    } else if (controllaMargin() == 2) {
        document.getElementById('inter2').style.display = 'none';
        document.getElementById('giallo2').style.display = 'none';
        document.getElementById('verde2').style.display = 'none';
        document.getElementById('blu2').style.display = 'none';
        document.getElementById('rosso2').style.display = '';
        nascondiTabella();
    } else if (controllaMargin() == 3) {
        document.getElementById('inter3').style.display = 'none';
        document.getElementById('giallo3').style.display = 'none';
        document.getElementById('verde3').style.display = 'none';
        document.getElementById('blu3').style.display = 'none';
        document.getElementById('rosso3').style.display = '';
        nascondiTabella();
    } else if (controllaMargin() == 4) {
        document.getElementById('inter4').style.display = 'none';
        document.getElementById('giallo4').style.display = 'none';
        document.getElementById('verde4').style.display = 'none';
        document.getElementById('blu4').style.display = 'none';
        document.getElementById('rosso4').style.display = '';
        nascondiTabella();
    }
}

function clickVerde() {

    if (controllaMargin() == 1) {
        document.getElementById('inter1').style.display = 'none';
        document.getElementById('giallo1').style.display = 'none';
        document.getElementById('rosso1').style.display = 'none';
        document.getElementById('blu1').style.display = 'none';
        document.getElementById('verde1').style.display = '';
        nascondiTabella();
    } else if (controllaMargin() == 2) {
        document.getElementById('inter2').style.display = 'none';
        document.getElementById('giallo2').style.display = 'none';
        document.getElementById('rosso2').style.display = 'none';
        document.getElementById('blu2').style.display = 'none';
        document.getElementById('verde2').style.display = '';
        nascondiTabella();
    } else if (controllaMargin() == 3) {
        document.getElementById('inter3').style.display = 'none';
        document.getElementById('giallo3').style.display = 'none';
        document.getElementById('rosso3').style.display = 'none';
        document.getElementById('blu3').style.display = 'none';
        document.getElementById('verde3').style.display = '';
        nascondiTabella();
    } else if (controllaMargin() == 4) {
        document.getElementById('inter4').style.display = 'none';
        document.getElementById('giallo4').style.display = 'none';
        document.getElementById('rosso4').style.display = 'none';
        document.getElementById('blu4').style.display = 'none';
        document.getElementById('verde4').style.display = '';
        nascondiTabella();
    }
}

function clickBlu() {

    if (controllaMargin() == 1) {
        document.getElementById('inter1').style.display = 'none';
        document.getElementById('giallo1').style.display = 'none';
        document.getElementById('verde1').style.display = 'none';
        document.getElementById('rosso1').style.display = 'none';
        document.getElementById('blu1').style.display = '';
        nascondiTabella();
    } else if (controllaMargin() == 2) {
        document.getElementById('inter2').style.display = 'none';
        document.getElementById('giallo2').style.display = 'none';
        document.getElementById('verde2').style.display = 'none';
        document.getElementById('rosso2').style.display = 'none';
        document.getElementById('blu2').style.display = '';
        nascondiTabella();
    } else if (controllaMargin() == 3) {
        document.getElementById('inter3').style.display = 'none';
        document.getElementById('giallo3').style.display = 'none';
        document.getElementById('verde3').style.display = 'none';
        document.getElementById('rosso3').style.display = 'none';
        document.getElementById('blu3').style.display = '';
        nascondiTabella();
    } else if (controllaMargin() == 4) {
        document.getElementById('inter4').style.display = 'none';
        document.getElementById('giallo4').style.display = 'none';
        document.getElementById('verde4').style.display = 'none';
        document.getElementById('rosso4').style.display = 'none';
        document.getElementById('blu4').style.display = '';
        nascondiTabella();
    }
}

function clickGiallo() {

    if (controllaMargin() == 1) {
        document.getElementById('inter1').style.display = 'none';
        document.getElementById('blu1').style.display = 'none';
        document.getElementById('verde1').style.display = 'none';
        document.getElementById('rosso1').style.display = 'none';
        document.getElementById('giallo1').style.display = '';
        nascondiTabella();
    } else if (controllaMargin() == 2) {
        document.getElementById('inter2').style.display = 'none';
        document.getElementById('blu2').style.display = 'none';
        document.getElementById('verde2').style.display = 'none';
        document.getElementById('rosso2').style.display = 'none';
        document.getElementById('giallo2').style.display = '';
        nascondiTabella();
    } else if (controllaMargin() == 3) {
        document.getElementById('inter3').style.display = 'none';
        document.getElementById('blu3').style.display = 'none';
        document.getElementById('verde3').style.display = 'none';
        document.getElementById('rosso3').style.display = 'none';
        document.getElementById('giallo3').style.display = '';
        nascondiTabella();
    } else if (controllaMargin() == 4) {
        document.getElementById('inter4').style.display = 'none';
        document.getElementById('blu4').style.display = 'none';
        document.getElementById('verde4').style.display = 'none';
        document.getElementById('rosso4').style.display = 'none';
        document.getElementById('giallo4').style.display = '';
        nascondiTabella();
    }
}