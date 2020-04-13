{%if message is defined %}
{{message}}
{% endif %}

<form action="/dashboard/auth/register" method="post">
            
    Username <input type="text" name="username" required="required"> <br/>
    Password <input type="password" name="password" required="required"> <br/>
    Email <input type="text" name="email" required="required"> <br/>

    <input type="submit" value="Simpan Data">
    
</form>