function fillTestProgressGraph(dailyActivity, canvasName) {
    if (dailyActivity.length > 1) {
        let graph = document.getElementById(canvasName);
        let width = graph.width;
        let height = graph.height;
        let horizontalPoints = 10;
        let verticalPoints = 5;

        for (let i = 0; i < dailyActivity.length; i++) {
            if (dailyActivity[i].passed > verticalPoints) {
                verticalPoints = dailyActivity[i].passed;
            }
            if (dailyActivity[i].failed > verticalPoints) {
                verticalPoints = dailyActivity[i].failed;
            }
        }
        console.log(horizontalPoints);
        var ctx = graph.getContext("2d");
        ctx.clearRect(0, 0, graph.width, graph.height);
        ctx.beginPath();
        ctx.font = "16px Arial";

        ctx.moveTo(20, 20);
        ctx.lineTo(20, height - 20);
        for (let i = 0; i <= verticalPoints; i++) {
            ctx.moveTo(20, height - 20 - i * (height - 40) / verticalPoints);
            ctx.lineTo(30, height - 20 - i * (height - 40) / verticalPoints);
            ctx.fillText(i, 0, height - 15 - i * (height - 40) / verticalPoints);
        }

        ctx.stroke();
        ctx.closePath();
        ctx.beginPath();
        ctx.font = "10px Arial";
        ctx.moveTo(20, height - 20);
        ctx.lineTo(width - 20, height - 20);
        for (let i = 0; i <= horizontalPoints; i++) {
            ctx.moveTo(20 + i * (width - 40) / horizontalPoints, height - 20);
            ctx.lineTo(20 + i * (width - 40) / horizontalPoints, height - 30);
            let date = new Date();
            date.setDate(date.getDate() - (10 - i));
            let dateString = date.getDate() + "/" + date.getMonth();
            ctx.fillText(dateString, 15 + i * (width - 40) / horizontalPoints, height);
        }

        ctx.stroke();
        ctx.closePath();

        let vericalScale = (height - 40) / verticalPoints;
        let horizontalScale = (width - 40) / horizontalPoints;

        ctx.beginPath();
        ctx.strokeStyle = '#4CAF50';
        for (let i = 1; i < dailyActivity.length; i++) {
            //draw passed
            let oldhPoint = 20 + dailyActivity[i - 1].dateDif * horizontalScale;
            let oldvPoint = height - 20 - dailyActivity[i - 1].passed * vericalScale;
            let hPoint = 20 + dailyActivity[i].dateDif * horizontalScale;
            let vPoint = height - 20 - dailyActivity[i].passed * vericalScale;
            ctx.moveTo(oldhPoint, oldvPoint);
            ctx.lineTo(hPoint, vPoint);
        }
        ctx.stroke();
        ctx.closePath();

        ctx.beginPath();
        ctx.strokeStyle = '#ff0000';
        for (let i = 1; i < dailyActivity.length; i++) {
            //draw failed
            let oldhPoint = 20 + dailyActivity[i - 1].dateDif * horizontalScale;
            let oldvPoint = height - 20 - dailyActivity[i - 1].failed * vericalScale;
            let hPoint = 20 + dailyActivity[i].dateDif * horizontalScale;
            let vPoint = height - 20 - dailyActivity[i].failed * vericalScale;
            ctx.moveTo(oldhPoint, oldvPoint);
            ctx.lineTo(hPoint, vPoint);
        }
        ctx.stroke();
        ctx.closePath();
    } else {
        let text = "Incepeti sa faceti cateva teste inainte a va vedea progesele";
        if(canvasName.indexOf("compare")!=-1)  {
            text = "Utilizatorul nu a parcurs destule teste";
        }
        document.getElementById(canvasName).parentNode.innerHTML = "<p class='error'>" + text + "</p>"
    }
}

function fillLearningGraph(dailyActivity, canvasName) {

    if (dailyActivity.length > 1) {
        let graph = document.getElementById(canvasName);
        let width = graph.width;
        let height = graph.height;
        let horizontalPoints = 10;
        let verticalPoints = 0;

        for (let i = 0; i < dailyActivity.length; i++) {
            if (dailyActivity[i].questions > verticalPoints) {
                verticalPoints = dailyActivity[i].questions;
            }
        }
        console.log(verticalPoints);
        var ctx = graph.getContext("2d");
        ctx.clearRect(0, 0, graph.width, graph.height);
        ctx.beginPath();
        ctx.font = "16px Arial";

        ctx.moveTo(20, 20);
        ctx.lineTo(20, height - 20);
        for (let i = 0; i <= verticalPoints; i++) {
            ctx.moveTo(20, height - 20 - i * (height - 40) / verticalPoints);
            ctx.lineTo(30, height - 20 - i * (height - 40) / verticalPoints);
            ctx.fillText(i, 0, height - 15 - i * (height - 40) / verticalPoints);
        }

        ctx.stroke();
        ctx.closePath();
        ctx.beginPath();
        ctx.font = "10px Arial";
        ctx.moveTo(20, height - 20);
        ctx.lineTo(width - 20, height - 20);
        for (let i = 0; i <= horizontalPoints; i++) {
            ctx.moveTo(20 + i * (width - 40) / horizontalPoints, height - 20);
            ctx.lineTo(20 + i * (width - 40) / horizontalPoints, height - 30);
            let date = new Date();
            date.setDate(date.getDate() - (10 - i));
            let dateString = date.getDate() + "/" + date.getMonth();
            ctx.fillText(dateString, 15 + i * (width - 40) / horizontalPoints, height);
        }

        ctx.stroke();
        ctx.closePath();

        let vericalScale = (height - 40) / verticalPoints;
        let horizontalScale = (width - 40) / horizontalPoints;


        if (dailyActivity.length > 1) {
            for (let i = 1; i < dailyActivity.length; i++) {
                ctx.beginPath();
                if (dailyActivity[i - 1].questions > dailyActivity[i].questions) {
                    ctx.strokeStyle = '#ff0000';
                } else {
                    ctx.strokeStyle = '#4CAF50';
                }
                let oldhPoint = 20 + dailyActivity[i - 1].dateDif * horizontalScale;
                let oldvPoint = height - 20 - dailyActivity[i - 1].questions * vericalScale;
                let hPoint = 20 + dailyActivity[i].dateDif * horizontalScale;
                let vPoint = height - 20 - dailyActivity[i].questions * vericalScale;
                ctx.moveTo(oldhPoint, oldvPoint);
                ctx.lineTo(hPoint, vPoint);
                ctx.stroke();
                ctx.closePath();
            }
        }
    } else {
        let text = "Incepeti sa folositi mediul de invatare inainte a va vedea progesele";
        if(canvasName.indexOf("compare")!=-1)  {
            text = "Utilizatorul nu a folosit mediul de invatare destul";
        }
        document.getElementById(canvasName).parentNode.innerHTML = "<p class='error'>" + text + "</p>"
    }
}

