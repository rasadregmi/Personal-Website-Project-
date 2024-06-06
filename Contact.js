function validate()
    {
      let email=document.getElementById('Email').value;
      let emailreg=/[A-Z a-z]{5}\.[0-9]{6}\@ncit\.edu\.np/;
      if(email===''||email===null)
      {
            document.getElementById('emailError').innerHTML='*Email can not be empty';
            return false;
      }
      else if(email.search(emailreg)<0)
      {
            document.getElementById('emailError').innerHTML='*Email pattern is not matched';
            return false;
      }
      else 
      {
        document.getElementById('emailError').innerHTML='';
      }
      
      
      let message=document.getElementById('Message').value;
      let messagereg=/[A-Z a-z]/;
      if(message===''||message===null)
      {
            document.getElementById('messageError').innerHTML='*Message can not be empty';
            return false;
      }
      else if(message.search(messagereg)<0)
      {
            document.getElementById('messageError').innerHTML='*Message pattern is not matched';
            return false;
      }
      else 
      {
        document.getElementById('messageError').innerHTML='';
      }
      return true;
    }