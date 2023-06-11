<form>
<textarea cols=10 rows=10 name='task'></textarea>
</form>
<button onclick="read()">Получить данные</button>
<button onclick="send()">Отправить данные</button>
<div id="textFromServer"></div>
<script>
    async function read()
    {
        let response=await fetch("get_task.php");
        if (response.ok){
            let answer = await response.text();
            textFromServer.innerHTML=answer;
            } else {
                console.log("Ошибка HTTP: " + response.status);
            }
    }
    async function send()
    {
        let response=await fetch("add_task.php",{
            method:'POST',
            body: new Formdata(document.forms[0])
            }); 
            if (response.ok){
                let answer = await response.text();
                console.log(answer);
                textFromServer.innerHTML=answer;
            } else {
                console.log("Ошибка HTTP: " + response.status);
            }  
    }   
    
</script>