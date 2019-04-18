<html>
<form method="post" action="/ta/{{$a->name}}">
	{{method_field('patch')}}
	{{csrf_field()}}
	
name :<input type="text" name="name" placeholder="name" value="{{$a->name}}"><br> <br/>
email :<input type="text" name="email" placeholder="email"  value="{{$a->email}}"><br> <br/>
<input type="submit" value="update"> 
</form>
<form method="post" action="/ta/{{$a->name}}">
	{{method_field('delete')}}
	{{csrf_field()}}
<input type="submit" value="delete"> <br> <br>
</form>