

    function calculmise(){
        var suminv = 0.0
        var cote=[]
        var mise=[]
        var i,m=0
        var misetot = parseFloat(document.getElementById("misetot").value)
        while (m<10){
            if(parseFloat(document.getElementById("coteid["+m+"]").value) > 0){
                cote[m] = parseFloat(document.getElementById("coteid["+m+"]").value)
                suminv += 1.0/parseFloat(document.getElementById("coteid["+m+"]").value)
            }
            m+=1
        }
        for(i=0;i<m;i++){
            if(parseFloat(document.getElementById("coteid["+i+"]").value) > 0){
                mise[i]=misetot * 1.0 / (cote[i] * suminv)
                document.getElementById("tableIdOutput["+i+"]").value = mise[i].toFixed(1)
            }
        }
        var recette
        var gain
        var coefmulti
        recette = mise[0]*cote[0]
        gain = recette - misetot
        coefmulti = recette / misetot
        document.getElementById("recette").value = recette.toFixed(1)
        document.getElementById("gain").value = gain.toFixed(1)
        document.getElementById("coefmulti").value = coefmulti.toFixed(1)
    }

    function effacer(){
        /*window.location.reload();*/
        setTimeout(function () {
            location.reload()
        }, 100);
    }



    function optim(){
        var suminv = 0.0
        var cote=[]
        var mise=[]
        var i,m=0
        var misetot = 1.0
        while (m<10){
            if(parseFloat(document.getElementById("coteid["+m+"]").value) > 0){
                cote[m] = parseFloat(document.getElementById("coteid["+m+"]").value)
                suminv += 1.0/parseFloat(document.getElementById("coteid["+m+"]").value)
            }
            m+=1
        }
        for(i=0;i<m;i++){
            if(parseFloat(document.getElementById("coteid["+i+"]").value) > 0){
                mise[i]=misetot * 1.0 / (cote[i] * suminv)
                document.getElementById("tableIdOutput["+i+"]").value = mise[i].toFixed(1)
            }
        }
        var recette
        var gain
        var coefmulti
        recette = mise[0]*cote[0]
        gain = recette - misetot
        coefmulti = recette / misetot
        // on a recuperer le coefficient multiplicateur, la cote 

        var misef
        misef = (-parseFloat(document.getElementById("gainnet").value))/(1-coefmulti)

        for(i=0;i<m;i++){
            if(parseFloat(document.getElementById("coteid["+i+"]").value) > 0){
                mise[i]=misef * 1.0 / (cote[i] * suminv)
                document.getElementById("tableIdOutput["+i+"]").value = mise[i].toFixed(1)
            }
        }
        var recette
        var gain
        var coefmulti
        recette = mise[0]*cote[0]
        gain = recette - misetot

        document.getElementById("misetotOptim").value = misef.toFixed(1)
        document.getElementById("coefmulti").value = coefmulti.toFixed(1)

    }