 <?php if(Auth::check()): ?>
        
        <div>You're in the admin page yayyy!!!!</div>
        
        <div><a href="/admin/logout"><span>Logout</span></a></div>
            
        
    <?php else: ?>
      
        <div>You're not authorized to see this page.</div>
         
    
    <?php endif; ?>
