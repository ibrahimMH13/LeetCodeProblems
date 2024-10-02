import random

class RandomizeSet():

	def __init__(self):
		
		self.list = []
		self.map = {}



	def insert(self, value):

		if value in self.map:

			return False

		self.map[value] = len(self.map);

		self.list.append(value);

		return True


	def remove(self,value):

		if value not in self.list:

			return False

		dIndex = self.map[value]
		lastEle = self.list[-1]

		if dIndex != len(self.list) -1:
			self.map[lastEle] = dIndex
			self.list[dIndex] = lastEle

		del self.map[value]
		self.list.pop()

		return True


	def random(self):

		return random.choice(self.list);
	

		