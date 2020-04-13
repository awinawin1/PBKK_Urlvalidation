<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini awin</h1>
          <p>daftar</p>
	{%if message is defined %}		{{message}}		{% endif %}
		</p>
	  
	{{ form.startForm() }}
       
	{{ form.rendering('username') }}
          
	{{ form.rendering('email') }}
  
			
	{{ form.rendering('password') }}

	{{ form.rendering('Register') }}
  
    {{ form.endForm() }}
</body>
</html>

