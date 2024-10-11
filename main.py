import pymysql
import csv
from flask import Flask, render_template, request, jsonify, redirect
try:
    conn = pymysql.connect(
        host="localhost",
        user="test",
        passwd="1234",
        port=3306,
        database="tks_official"
    )
    print("連線成功")
except Exception as e:
    print(f"連線錯誤: {e}")
    exit()

try:
    db = conn.cursor()
    sql = "USE tks_official"
    db.execute(sql)
    print("連線資料庫成功")
except Exception as e:
    print(f"資料庫不存在或連線失敗: {e}")
    exit()

# data = []
# flag = False
# with open("TKS contact form - Sheet1.csv", newline="", encoding="utf-8") as csvfile:
#     rows = csv.reader(csvfile)
#     for row in rows:
#         if flag == False:
#             flag = True
#             continue
#         if len(row[0]) > 0:
#             data.append([row[0], row[1], row[2], row[4]])

# for args in data:
#     try:
#         args = tuple(args)
#         db.callproc("insert_message", args)
#         conn.commit()
#     except Exception as e:
#         print(e)

app = Flask(__name__)
@app.route("/")
def index():
    return render_template("index.php")

@app.route('/submit-form', methods=['POST'])
def submit_form():
    # Retrieve the form data
    data = request.get_json()  # Use get_json() to get JSON data

    firstname = data.get('firstname')
    lastname = data.get('lastname')
    email = data.get('email')
    subject = data.get('subject')

    # Process the data (e.g., save to database)
    print(f"First Name: {firstname}")
    print(f"Last Name: {lastname}")
    print(f"Email: {email}")
    print(f"Subject: {subject}")
    args = (firstname, lastname, email, subject)
    db.callproc("insert_message", args)
    conn.commit()
    # Redirect to the thank-you page
    return jsonify({"message": "Form submitted successfully!"}), 200

@app.route('/thankyou')
def thank_you():
    return render_template('thankyou.php')

if __name__ == "__main__":
    app.run(debug=True)