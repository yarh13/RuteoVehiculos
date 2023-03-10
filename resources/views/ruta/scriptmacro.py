
# from openpyxl import Workbook
# wb = Workbook()
# from openpyxl import load_workbook 
# wb = load_workbook(filename = 'ruteo_macro.xlsm')

# Coneccion a MYSQL
conexion1=mysql.connector.connect(host="localhost", user="root", passwd="")
cursor1=conexion1.cursor()
cursor1.execute("show databases")
for base in cursor1:
    print(base)
conexion1.close()

# grab the active worksheet
# ws = wb.active

# Data can be assigned directly to cells
# ws['D192'] = 47

# Save the file
# wb.save("sample.xlsm")