<html>
<body>
    <div>
      <form method="post" action="{{url('contact')}}">
        @csrf
        <input placeholder="name" name="name" type="text">
        <input placeholder="email" name="email" type="email">
        <textarea placeholder="message" name="message" id="" cols="30" rows="5"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
</body>
</html>