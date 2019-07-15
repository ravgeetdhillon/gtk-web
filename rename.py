import os 

def renameFiles(address, prefix, ext):
	for filename in os.listdir(address):
		if prefix in filename:
			if ext in filename:
				dst = filename.split("-")
				dst[0] = dst[0].lower()
				dst = prefix + "-" + dst[0] + ext
				src = address + filename
				dst = address + dst
				os.rename(src, dst)

renameFiles( "assets/img/", "wall", ".svg" )
print("done")