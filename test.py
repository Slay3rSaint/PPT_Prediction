import numpy as np
import pickle
import pandas as pd
from urllib.parse import urlencode

lr_model = pickle.load(open('final_model.pkl', 'rb'))
X = pickle.load(open('train_data.pkl', 'rb'))
preprocessor = pickle.load(open('preprocessor.pkl', 'rb'))
url = 'http://localhost:8080/PHT/Modules/Prediction/predict.php'

   # FOR loop to retrieve values from the form
new_observation = ['Male', 24, 'School', 7, 2, 7, 1, 'Sad', 5, 3]
# for value in request.form.values():       
#     new_observation.append(value) 
new_observation=[new_observation]
print(new_observation)
new_observation_df = pd.DataFrame(new_observation, columns=X.columns)
    

# Preprocess the input features using the same preprocessor object used in training
new_observation_processed = preprocessor.transform(new_observation_df)

# Get predictions from the Linear Regression model
lr_prediction = lr_model.predict(new_observation_processed)
 
output = int(lr_prediction)
print(output)
 

