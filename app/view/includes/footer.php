<footer class="dashboard">
		<h4>© 2020, 2nd Year Group Project | University of Colombo School of Computing</h4>
</footer>

<script type="text/javascript">
        const currentLocation = location.href;
        const menuItem = document.querySelectorAll('a');
        const menuLength = menuItem.length;
              for(let i = 0; i<menuLength; i++){
                  if(menuItem[i].href === currentLocation){
                      menuItem[i].style.background = "#45B39D";
                  }
              }
</script>

</body>
</html>