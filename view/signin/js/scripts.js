window.onload = function()
{
    let btn = document.querySelector(".btn").onclick = function(){
        // btn.preventDefault();
        let user = {
            login : document.querySelector('#login').value,
            password : document.querySelector('#password').value
        }

        let fd = new FormData();
        user = JSON.stringify(user);
        fd.append("user", user);

        axios.post("api/user/signin", fd)
        .then(function(response){
            let data = response.data
            // console.log(data);
            let user = JSON.stringify(data);
            // console.log(data.id);
            // console.log(user);
            localStorage.setItem('user', user);

            document.location.href = "http://menoffuture/user";
        });
    };

}

