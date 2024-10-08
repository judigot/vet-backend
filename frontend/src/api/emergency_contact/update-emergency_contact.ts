/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IEmergencyContact } from "../../interfaces/interfaces";

type IBody = IEmergencyContact;

export const updateEmergencyContact = async (formData: IBody): Promise<IBody> => {
  const result: IBody = await customFetch.patch({
    url: `/emergency_contacts`,
    body: JSON.stringify(formData),
  });
  return result;
};

