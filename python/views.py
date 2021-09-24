from flask import render_template
import json

fileName = '../json/library.json'

def index():
    return render_template('index.php')

def book(id):
    return render_template('book.html')

def get_books():

  books = []

  file = open(fileName, 'r')
  data = json.load(file)
  file.close()

  with open(fileName) as file:
      data = json.load(file)

  for key in data.keys():
    for book in data[key]:
      books.append(book)

  return render_template('index.php')

# def get_books():


  
#   return json.dumps()

