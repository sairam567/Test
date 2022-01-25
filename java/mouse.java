public class mouse{ 
	int id;
	String name;
	mouse()
	{
		System.out.println("this is default");
	}
    mouse(int i, String n){
    this.id=i;
    this.name=n;
    }
    void display()
    {
    	System.out.println(id+""+name);
    }
 public static void main(String args[]){
	 mouse m1=new mouse(1,"sai");
	 mouse m2=new mouse(2,"ram");
	 m1.display();
	 m2.display();
 }	 
 }
