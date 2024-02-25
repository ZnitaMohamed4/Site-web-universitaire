
    let inf = document.getElementById("inf");
    let empl = document.getElementById("empl");
    let dem = document.getElementById("dem");
    let dele = document.getElementById("dele");

    // Variables pour chaque section
    let infoetu = document.getElementById("infoetu");
    let consulter = document.getElementById("consulter");
    let signalPanneSection = document.getElementById("signalPanneSection");
    let demande = document.getElementById("demande");

    dem.addEventListener('click', () => {
        signalPanneSection.style.display = "none";
        consulter.style.display = "none";
        demande.style.display = "block";
        infoetu.style.display = "none";
    });

    empl.addEventListener('click', () => {
        signalPanneSection.style.display = "none";
        consulter.style.display = "block";
        demande.style.display = "none";
        infoetu.style.display = "none";
    });

    dele.addEventListener('click', () => {
        signalPanneSection.style.display = "block";
        consulter.style.display = "none";
        demande.style.display = "none";
        infoetu.style.display = "none";
    });

    inf.addEventListener('click', () => {
        infoetu.style.display = "block";
        signalPanneSection.style.display = "none";
        consulter.style.display = "none";
        demande.style.display = "none";
    });
