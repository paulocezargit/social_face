function Validate_Birthday(value){

    const regex = /^(\d{4})-(\d{2})-(\d{2})$/;
    const match = value.match(regex);

    if (!match) {
        return false;
    }

    const year = parseInt(match[1], 10);
    const month = parseInt(match[2], 10) - 1;
    const day = parseInt(match[3], 10);
    const birthDate = new Date(year, month, day);

    if (birthDate.getFullYear() !== year || birthDate.getMonth() !== month || birthDate.getDate() !== day) {
        return false;
    }

    const today = new Date();
    const age = today.getFullYear() - year;

    if (birthDate > today) {
        return false;
    }

    if (age < 0 || age > 120) {
        return false;
    }

    return true;

}

function Validate_PasswordStrength(password) {

    const hasLowercase = /[a-z]/.test(password);
    const hasUppercase = /[A-Z]/.test(password);
    const hasNumber    = /[0-9]/.test(password);
    const hasSpecial   = /[^A-Za-z0-9]/.test(password);
    const isValid = hasLowercase && hasUppercase && hasNumber && hasSpecial;

    return [isValid, hasLowercase, hasUppercase, hasNumber, hasSpecial];

}


function Validate_Email(email) {

    const regex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
    return regex.test(email);

}