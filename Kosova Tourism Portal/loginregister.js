const users = [];

function handleRegister(event) {
    event.preventDefault();
    const name = document.getElementById("name").value;
    const email = document.getElementById("registerEmail").value;
    const password = document.getElementById("registerPassword").value;
    const role = document.getElementById("role").value;

    if (role === "admin" && !email.includes(".admin")) {
        alert("Admin emails must contain '.admin'.");
        return false;
    }
    if (role === "user" && email.includes(".admin")) {
        alert("User emails cannot contain '.admin'.");
        return false;
    }


    if (users.some(user => user.email === email)) {
        alert("This email is already registered!");
        return false;
    }

    
    users.push({ name, email, password, role });
    alert("Registration successful! You can now log in.");
    window.location.href = "login.html";
}


function handleLogin(event) {
    event.preventDefault();
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    
    const user = users.find(user => user.email === email && user.password === password);

    if (!user) {
        alert("Invalid email or password!");
        return false;
    }

    
    if (user.role === "admin" && !email.includes(".admin")) {
        alert("Admin emails must contain '.admin'.");
        return false;
    }
    if (user.role === "user" && email.includes(".admin")) {
        alert("User emails cannot contain '.admin'.");
        return false;
    }

    
    if (user.role === "admin") {
        alert(`Welcome, Admin ${user.name}!`);
        window.location.href = "admin_dashboard.html";
    } else {
        alert(`Welcome, ${user.name}!`);
        window.location.href = "user_dashboard.html";
    }
}
