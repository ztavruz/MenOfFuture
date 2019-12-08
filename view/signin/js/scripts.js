window.onload = function()
{
    let btn = document.querySelector(".btn").onclick = function(){
        // btn.preventDefault();
        let user = {
            login : document.querySelector('#login').value,
            password : document.querySelector('#password').value
        }
        user = JSON.stringify(user);

        let fd = new FormData();
        fd.append("user", user);

        axios.post("api/user/signin", fd)
        .then(function(response){
            let data = response.data;
            let host = data.pageHost;
            let user = JSON.stringify(data);
            
            localStorage.setItem('user', user);

            document.location.href = host + "user";
        });
    };

}

