function skl(number, titles)  {  
    cases = [2, 0, 1, 1, 1, 2];  
    return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];  
}  

function jfCountDown(d, h, m, s) {	
	this.days = d;
	this.days_1 = Math.floor(this.days/10); 
	if ( this.days_1 == 0 ) this.days_1 = '';
	this.days_2 = this.days%10;
	
	this.hours = h;
	this.hours_1 = Math.floor(this.hours/10);
	this.hours_2 = this.hours%10; 
	
	this.minutes = m;
	this.minutes_1 = Math.floor(this.minutes/10);
	this.minutes_2 = this.minutes%10;
	
	this.seconds = s;
	this.seconds_1 = Math.floor(this.seconds/10); 
	this.seconds_2 = this.seconds%10;
	
	this.id_days_1 = $('#d-1');
	this.id_days_2 = $('#d-2');
	
	this.id_hours_1 = $('#h-1');
	this.id_hours_2 = $('#h-2');
	
	this.id_minutes_1 = $('#m-1');
	this.id_minutes_2 = $('#m-2');
	
	this.id_seconds_1 = $('#s-1');
	this.id_seconds_2 = $('#s-2');
	
	this.update();
	
	var self = this;
		
	this.id_interval = setInterval(function() {self.run();}, 1000);	
}

jfCountDown.prototype.update = function()
{
	this.id_days_1.removeClass().html(this.days_1);
	this.id_days_2.removeClass().html(this.days_2 + ' ' + skl(this.days_1 + this.days_2, ['день', 'дня', 'дней']) );
	
	this.id_hours_1.removeClass().html(this.hours_1);
	this.id_hours_2.removeClass().html(this.hours_2);
	
	this.id_minutes_1.removeClass().html(this.minutes_1);
	this.id_minutes_2.removeClass().html(this.minutes_2);
	
	this.id_seconds_1.removeClass().html(this.seconds_1);
	this.id_seconds_2.removeClass().html(this.seconds_2);
}

jfCountDown.prototype.run = function()
{	
	if(this.seconds == 0)
	{
		if(this.minutes == 0)
		{
			if(this.hours == 0)
			{
				if(this.days == 0)
				{
					clearInterval(this.id_interval);
					window.alert('Подтверждение началось');
				}
				else
				{
					this.days -= 1;
					this.hours = 23;
					this.minutes = 59;
					this.seconds = 59;
					
					this.days_1 = Math.floor(this.days/10);
					this.days_2 = this.days%10;
	
					this.hours_1 = Math.floor(this.hours/10); 
					this.hours_2 = this.hours%10; 
	
  				this.minutes_1 = Math.floor(this.minutes/10); 
					this.minutes_2 = this.minutes%10;
	
					this.seconds_1 = Math.floor(this.seconds/10); 
					this.seconds_2 = this.seconds%10;
				}
			}
			else
			{				
				this.hours -= 1;
				this.minutes = 59;
				this.seconds = 59;
								
				this.days_1 = Math.floor(this.days/10);
				this.days_2 = this.days%10;
	
				this.hours_1 = Math.floor(this.hours/10); 
				this.hours_2 = this.hours%10; 
	
  			this.minutes_1 = Math.floor(this.minutes/10); 
				this.minutes_2 = this.minutes%10;
	
				this.seconds_1 = Math.floor(this.seconds/10); 
				this.seconds_2 = this.seconds%10;
			}
		}
		else
		{
			this.minutes -= 1;
			this.seconds = 59;			
	
			this.minutes_1 = Math.floor(this.minutes/10); 
			this.minutes_2 = this.minutes%10;
	
			this.seconds_1 = Math.floor(this.seconds/10); 
			this.seconds_2 = this.seconds%10;
		}
	}
	else
	{
		this.seconds -= 1;		
		
		this.seconds_1 = Math.floor(this.seconds/10); 
		this.seconds_2 = this.seconds%10;
	}
	
	this.update();
}