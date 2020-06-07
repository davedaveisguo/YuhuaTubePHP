<?php
class SettingsFormProvider {


    public function createUserDetailsForm($firstName,$lastName,$email) {
        $firstNameInput = $this->createFirstNameInput($firstName);
        $lastNameInput = $this->createLastNameInput($lastName);
        $emailInput = $this->createEmailInput($email);
        $saveButton = $this->createSaveUserDetailsButton();


        return "<form action='settings.php' method='post' enctype='multipart/form-data'>
                    <span class='title'>User Details</span>
                    $firstNameInput 
                    $lastNameInput
                    $emailInput
                    $saveButton
                </form>";
    }


    
    public function createPasswordForm() {
        $oldPasswordInput = $this->createPasswordInput("oldPassword","Old password");
        $newPassword1Input = $this->createPasswordInput("newPassword","New password");
        $newPassword2Input = $this->createPasswordInput("newPassword2","Confirm new password");
    
        $saveButton = $this->createSavePasswordButton();


        return "<form action='settings.php' method='post' enctype='multipart/form-data'>
                    <span class='title'>Update Password</span>
                    $oldPasswordInput
                    $newPassword1Input
                    $newPassword2Input
                    $saveButton
                </form>";
    }

    private function createPasswordInput($name, $placeholder) {

        return "<div class='form-group'>
                    <input class='form-control' type='password' placeholder='$placeholder' name='$name' required>
                </div>";
    }


    private function createSavePasswordButton() {
        return "<button type='submit' class='btn btn-primary' name='savePasswordButton'>Save</button>";
    }




    private function createFirstNameInput($value) {
        if($value==null) $value="";
        return "<div class='form-group'>
                    <input class='form-control' type='text' placeholder='First name' name='firstName' required value='$value'>
                </div>";
    }

    private function createLastNameInput($value) {
        if($value==null) $value="";
        return "<div class='form-group'>
                    <input class='form-control' type='text' placeholder='Last name' name='lastName' required value='$value'>
                </div>";
    }


    private function createEmailInput($value) {
        if($value==null) $value="";
        return "<div class='form-group'>
                    <input class='form-control' type='email' placeholder='Email' name='email' required value='$value'>
                </div>";
    }

    private function createSaveUserDetailsButton() {
        return "<button type='submit' class='btn btn-primary' name='saveDetailsButton'>Save</button>";
    }
}
?>