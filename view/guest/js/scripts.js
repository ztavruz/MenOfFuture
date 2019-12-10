window.onload = function()
{
    let entrance = document.querySelector("#entrance").onclick = function(){

        let token = localStorage.getItem('token');

        let fd = new FormData();
        fd.append("token", token);
        
        axios.post("api/user/author", fd)
        .then(function(response){
            let data = response.data;
            let host = data.pageHost;
            let validate = data.validate;

            if(validate != "uhdefined" && validate != null ){
                document.location.href = host + "user";
            }
            else
            {
                console.log(host);
                document.location.href = host + "signin";
            }

            
        });
    }
}

