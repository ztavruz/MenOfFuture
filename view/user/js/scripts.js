window.onload = function()
{
    let user = localStorage.getItem('user');
    user = JSON.parse(user);

    document.querySelector('.user').innerHTML = user.login;

    // this.console.log(user.login);
    // this.console.log(user[1]);
}